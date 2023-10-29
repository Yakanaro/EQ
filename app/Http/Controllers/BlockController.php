<?php

namespace App\Http\Controllers;

use App\Http\Requests\Block\StoreBlockRequest;
use App\Http\Requests\Block\UpdateBlockRequest; 
use App\Models\Block;
use App\Models\UserBlock;
use Illuminate\Http\Request;
use App\Repositories\BlockRepository\BlockRepository;
use App\Repositories\BlockRepository\Dto\StoreBlockDto;
use App\Repositories\BlockRepository\Dto\UpdateBlockDto; 

class BlockController extends Controller
{
    private $blockRepository;

    public function __construct(BlockRepository $blockRepository)
    {
        $this->blockRepository = $blockRepository;
    }

    public function create(){
        return view('block.create');
    }

    public function store(StoreBlockRequest $request)
    {
        $validated = $request->validated();

        $storeBlockDto = new StoreBlockDto();
        $storeBlockDto->setTitle($validated['title']);
        $storeBlockDto->setDescription($validated['description']);

        $this->blockRepository->store($storeBlockDto);

        session()->flash('message', 'Блок успешно сохранен.');

        return redirect()->route('block.create')->with('message', 'Блок успешно сохранен.');
    }

    

    public function edit(Block $block)
    {
        $blocks = Block::all();
        return view('block.edit', ['block' => $block, 'blocks' => $blocks]);
    }

    public function update(UpdateBlockRequest $request, Block $block)
    {
        $validated = $request->validated();

        $updateBlockDto = new UpdateBlockDto();
        $updateBlockDto->setTitle($validated['title']);
        $updateBlockDto->setDescription($validated['description']);

        $this->blockRepository->update($block, $updateBlockDto);

        // Обновите информацию о связанных теориях
        foreach ($block->theories as $theory) {
            $theory->update([
                'block_id' => $validated['block_id_' . $theory->id],
                'theory_content' => $validated['theory_content_' . $theory->id],
                'assignment' => $validated['assignment_' . $theory->id],
            ]);
        }

        return redirect()->route('admin.index')->with('message', 'Блок и теории успешно обновлены.');
    }

    public function index(){
        $blocks = Block::with('theories')->get();

        return view('block.index', ['blocks' => $blocks]);
    }

    public function show($id)
    {
        $block = Block::with('theories')->findOrFail($id);

        return view('block.show', ['block' => $block]);
    }

    public function complete(Request $request, Block $block)
    {
        // Получить id текущего пользователя.
        $user_id = auth()->id();

        // Проверить, существует ли уже запись в таблице user_blocks для этого пользователя и блока.
        $userBlock = UserBlock::where('user_id', $user_id)->where('block_id', $block->id)->first();

        if (!$userBlock) {
            // Если запись не существует, то создать её с status = true.
            UserBlock::create([
                'user_id' => $user_id,
                'block_id' => $block->id,
                'status' => true,
            ]);
        } else {
            // Если запись уже существует, то обновить её status на true.
            $userBlock->status = true;
            $userBlock->save();
        }

        return redirect()->route('blocks.index')->with('message', 'Блок успешно пройден!');
    }
    }
