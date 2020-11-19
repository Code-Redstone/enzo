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
    return view('welcome');
});

//Route::resource('games', GameController::class);

Route::get('games', 'GameController@index');
Route::get('games/create', 'GameController@create');
Route::post('games', 'GameController@store');
Route::get('games/update/{id}', 'GameController@update');
Route::get('games/delete/{id}', 'GameController@destroy');
Route::get('games/{id}', 'GameController@show');
Route::get('games/edit/{id}', 'GameController@edit');
