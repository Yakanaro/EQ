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

        return redirect()->route('block.create');
    }

    public function edit(Block $block)
    {
        return view('block.edit', ['block' => $block]);
    }

    public function update(Request $request, Block $block)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $block->title = $request->title;
        $block->description = $request->description;
        $block->save();

        session()->flash('message', 'Блок успешно обновлен.');

        return redirect()->route('block.index');
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
