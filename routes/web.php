<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\DiagnosticResultController;
use App\Http\Controllers\DiagnosticsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatementsController;
use App\Http\Controllers\TechniqueController;
use App\Http\Controllers\TheoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Route::get('blocks/index', function () {
    return view('user', ['user' => Auth::user()]);
})->middleware(['auth', 'verified'])->name('me');

Route::get('settings', function () {
    return view('settings', ['user' => Auth::user()]);
});

Route::get('/questions', function () {
    return view('questions');
});

Route::group([
    'prefix' => 'users',
    'as' => 'users.',
], function () {
    Route::get('users', [UserController::class, 'index'])->name('index');
});

Route::get('theory/create', [TheoryController::class, 'create'])->name('theory.create');
Route::post('theory', [TheoryController::class, 'store'])->name('theory.store');
Route::put('theory/update', [TheoryController::class, 'update'])->name('theory.update');

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('block/create', [BlockController::class, 'create'])->name('block.create');
Route::get('blocks/{block}/edit', [BlockController::class, 'edit'])->name('block.edit');
Route::post('block/{block}', [BlockController::class, 'update'])->name('block.update');
Route::post('block', [BlockController::class, 'store'])->name('block.store');
Route::get('blocks/index', [BlockController::class, 'index'])->name('blocks.index');
Route::get('/blocks/{id}', [BlockController::class, 'show'])->name('blocks.show')->middleware('auth');
Route::post('blocks/{block}/complete', [BlockController::class, 'complete'])->name('blocks.complete');

Route::group([
    'prefix' => 'diagnostic',
    'as' => 'diagnostic.',
], function () {
    Route::get('', [DiagnosticsController::class, 'index'])->name('index');
    Route::get('diagnostics', [DiagnosticsController::class, 'diagnostics'])->name('diagnostics')->middleware('auth');
    Route::get('sectionA', [DiagnosticsController::class, 'indexA'])->name('sectionA');
    Route::get('sectionB', [DiagnosticsController::class, 'indexB'])->name('sectionB');
    Route::get('sectionC', [DiagnosticsController::class, 'indexC'])->name('sectionС.indexС');
});

Route::get('/statements/create', [StatementsController::class, 'create'])->name('statements.create');
Route::post('/statements', [StatementsController::class, 'store'])->name('statements.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/diagnostic/store', [DiagnosticResultController::class, 'store'])->name('diagnostic.store');

Route::prefix('techniques')->as('techniques.')->group(function () {
    Route::get('create', [TechniqueController::class, 'create'])->name('create');
    Route::post('store', [TechniqueController::class, 'store'])->name('store');
});

Route::get('/me', [UserController::class, 'me'])->name('me')->middleware('auth');
//Route::get('/me', function () {
//    return view('user.me');
//})->name('me')->middleware('auth');

require __DIR__ . '/auth.php';
