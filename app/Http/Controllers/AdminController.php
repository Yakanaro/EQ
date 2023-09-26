<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $blocks = Block::all();
        return view('admin.index', compact('blocks'));
    }
}
