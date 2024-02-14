<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\DashboardController;
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
        Route::get('/board/{id}', 'show')->name('board.show');
        Route::put('/board/{id}', 'update')->name('board.update');
    });
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::post('/dashboard', 'store')->name('dashboard.store');
        Route::post('/dashboard/{board}/lists', [BoardListController::class, 'store'])->name('boardLists.store');
    });
});

require __DIR__ . '/auth.php';
