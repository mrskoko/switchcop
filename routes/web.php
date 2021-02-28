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

Route::get('/', 'GameController@index');
Route::get('games', 'GameController@getAllGames');
Route::get('games/{id}', 'GameController@getGame');

Route::post('gameCreate', 'GameController@create');
Route::post('gameUpdate', 'GameController@update');
Route::get('gameDelete/{id}', 'GameController@delete');

Route::view('gamesAdd', 'gamesAdd');
