<?php

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

Route::get('/', 'MenuController@index');

Route::get('/bet', 'GameController@bet');
Route::get('/firstHand', 'GameController@firstHand');
Route::post('/secondHand', 'GameController@secondHand');