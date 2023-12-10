<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function me ()
    {
        $completedBlocks = $completedBlocks = auth()->user()->status_blocks()->wherePivot('status', true)->get();

        return view('user.me', ['completedBlocks' => $completedBlocks]);
    }
}
