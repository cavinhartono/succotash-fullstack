<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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


Route::middleware('auth')->group(function () {
    Route::controller(BoardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/show', 'show')->name('board.index');
    });
});

require __DIR__ . '/auth.php';
