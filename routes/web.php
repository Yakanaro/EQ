<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatementsController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/me', function () {
    return view('user', ['user' => Auth::user()]);
})->middleware(['auth', 'verified'])->name('me');

Route::get('settings', function () {
    return view('settings', ['user' => Auth::user()]);
});

Route::get('/questions', function () {
    return view('questions');
});

Route::get('/statements/create', 'App\Http\Controllers\StatementsController@create')->name('statements.create');
Route::post('/statements', 'StatementsController@store')->name('statements.store');
//Route::match(['get', 'post'], '/statements', 'App\Http\Controllers\StatementsController@store')->name('statements.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
