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

Auth::routes(['register' => false]);

Route::middleware('auth')->get('/home/{data?}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->get('/eclipse', [App\Http\Controllers\EclipsesController::class, 'index'])->name('eclipse');
Route::middleware('auth')->get('/news/{site?}', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::middleware('auth')->get('/filmes', [App\Http\Controllers\FilmesSeriesController::class, 'index'])->name('filmes');
Route::middleware('auth')->get('/satelites/{sat?}/{data?}', [App\Http\Controllers\SateliteController::class, 'index'])->name('satelite');
Route::middleware('auth')->get('/futebol/{id?}', [App\Http\Controllers\FutebolController::class, 'index'])->name('futebol');
Route::resource('/removebg', \App\Http\Controllers\RemoveBgController::class);

Route::middleware('auth')->get('/teste/{data?}', [App\Http\Controllers\TesteController::class, 'index'])->name('teste');
