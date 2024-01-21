<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ChartController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/quiz', [QuizController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::resource('member', MemberController::class);
    Route::resource('idea', IdeaController::class);
    Route::resource('user', UserController::class);
    Route::get('/quiz/school', [QuizController::class, 'school']);
    // Route::get('/quiz/register', [QuizController::class, 'register']);
    Route::resource('quiz', QuizController::class)->except(['index']);
    Route::get('grafik', [ChartController::class, 'pieChart']);
    
    // sementara
    Route::get('/ideal', [IdeaController::class, 'ideal']);
});



require __DIR__.'/auth.php';
