<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;

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
Route::get('/quiz', [QuizController::class, 'index']);
Route::get('/event', [EventController::class, 'indexPublic']);
Route::get('/gallery', [GalleryController::class, 'indexPublic']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('member', MemberController::class);
    Route::resource('idea', IdeaController::class);
    Route::resource('user', UserController::class);
    Route::get('/quiz/school', [QuizController::class, 'school']);
    Route::resource('quiz', QuizController::class)->except(['index']);
    Route::get('/chart', [ChartController::class, 'chart'])->name('chart.chart');
    Route::resource('school', SchoolController::class);
    Route::get('/allidea', [IdeaController::class, 'allIdea']);
    Route::resource('event-manage', EventController::class);
    Route::resource('gallery-manage', GalleryController::class);
});

require __DIR__.'/auth.php';