<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\UserBlock;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function create(){
        return view('block.create');
    }

    public function store(Request $request)
    {
        $block = new Block;
        $block->title = $request->title;
        $block->description = $request->description;
        $block->save();

        session()->flash('message', 'Блок успешно сохранен.');

        return redirect()->route('block.create')->with('message', 'Блок успешно сохранен.');
    }

    public function edit(Block $block)
    {
        $blocks = Block::all();
        return view('block.edit', ['block' => $block, 'blocks' => $blocks]);
    }

    public function update(Request $request, Block $block)
    {
        $block->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        // Обновите информацию о связанных теориях
        foreach ($block->theories as $theory) {
            $theory->update([
                'block_id' => $request->input('block_id_' . $theory->id),
                'theory_content' => $request->input('theory_content_' . $theory->id),
                'assignment' => $request->input('assignment_' . $theory->id),
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

        if(!$userBlock){
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
