<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosticsController extends Controller
{
    public function index()
    {
        return view('diagnosic.index');
    }

    public function indexA()
    {
        return view('diagnosic.sectionA');
    }
    public function indexB()
    {
        return view('diagnosic.sectionB');
    }

    public function indexC()
    {
        return view('diagnosic.sectionC');
    }
}
