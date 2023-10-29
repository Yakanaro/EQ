<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Theory;
use Illuminate\Http\Request;

class TheoryController extends Controller
{
    public function create(){
        $blocks = Block::all();
        return view('theory.create', compact('blocks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'block_id' => 'required|exists:blocks,id',
            'theory_content' => 'required',
            'assignment' => 'required',
        ]);

        $theory = new Theory;
        $theory->block_id = $request->block_id;
        $theory->theory_content = $request->theory_content;
        $theory->assignment = $request->assignment;
        $theory->save();

        return redirect()->route('theory.create')->with('message', 'Теория успешно сохранена.');
    }

    public function update(Request $request, Theory $theory)
    {
        $request->validate([
            'block_id' => 'required|exists:blocks,id',
            'theory_content' => 'required',
            'assignment' => 'required',
        ]);

        $theory->block_id = $request->block_id;
        $theory->theory_content = $request->theory_content;
        $theory->assignment = $request->assignment;
        $theory->save();

        session()->flash('message', 'Теория успешно обновлен.');

        return redirect()->route('block.index');
    }
}
