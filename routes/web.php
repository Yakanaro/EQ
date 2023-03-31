<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/',
    function () {
        return view('index');
    }
)->name('index');

Route::get('me', function (){
    return view('user');
}
)->name('me');

Route::get('progress', function (){
    return view('progress');
}
)->name('progress');

Route::get('lessons', function (){
    return view('lessons');
}
)->name('lessons');