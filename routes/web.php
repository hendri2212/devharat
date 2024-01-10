<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);

// Route::get('/quiz', [Controller::class, 'index']);

//Route::get('/choice', [Controller::class, 'index']);

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/choice', function () {
    return view('choice');
});

Route::get('/verification', function () {
    return view('verification');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('member', MemberController::class);
    Route::resource('idea', IdeaController::class);
    Route::resource('user', UserController::class);

    // sementara
    Route::get('/ideal', [IdeaController::class, 'ideal']);
});

require __DIR__.'/auth.php';
