<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\CardListController;
use App\Http\Controllers\DashboardController;
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
        Route::post('/board/{board}/lists', [CardListController::class, 'store'])->name('cardLists.store');
    });
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::post('/dashboard', 'store')->name('dashboard.store');
    });
});

require __DIR__ . '/auth.php';
