<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statement;

class StatementsController extends Controller
{
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $statement = new Statement();
        return view('statements.create', compact('statement'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $this->validate($request, [
            'statement' => 'required|unique:articles',
        ]);

        $statement = new Statement;
        $statement->fill($data);
        $statement->save();

        return redirect()->route('statements.create');
    }
}
