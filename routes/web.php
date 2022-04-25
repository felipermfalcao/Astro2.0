<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('teste', [function (){

    $client = new Client([
        'base_uri' => 'https://api.github.com/users/felipermfalcao',
        'timeout'  => 2.0,
    ]);
    return json_decode($client->request('GET')->getBody())->login;
}]);
