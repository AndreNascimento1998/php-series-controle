<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SeriesController;
use \App\Http\Controllers\SeasonsController;
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
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)
    ->only(['index', 'create', 'store', 'edit', 'update']);

Route::delete('/series/destroy/{id}', [SeriesController::class, 'destroy'])
    ->name('series.destroy');

    Route::get('series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');
