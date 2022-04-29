<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home/{data?}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/eclipse', [App\Http\Controllers\EclipsesController::class, 'index'])->name('eclipse');
Route::get('/news/{site?}', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/filmes', [App\Http\Controllers\FilmesSeriesController::class, 'index'])->name('filmes');
Route::get('/satelites/{sat?}/{data?}', [App\Http\Controllers\SateliteController::class, 'index'])->name('satelite');
Route::get('/futebol/{id?}', [App\Http\Controllers\FutebolController::class, 'index'])->name('futebol');

Route::get('/teste/{data?}', [App\Http\Controllers\TesteController::class, 'index'])->name('teste');
