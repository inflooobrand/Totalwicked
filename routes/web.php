<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TotallywickedController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/','TotallywickedController@index');

Route::get('/character', 'App\Http\Controllers\TotallywickedController@index');
Route::get('/character/{id}', 'App\Http\Controllers\TotallywickedController@getSingleCharacter');
Route::get('/episode/{id}', 'App\Http\Controllers\TotallywickedController@getEpisode');
Route::get('api/episode/{id}', 'App\Http\Controllers\TotallywickedController@getEpisodeAll');
Route::get('api/character/{id}', 'App\Http\Controllers\TotallywickedController@getcharacterName');
Route::get('api/location/{id}', 'App\Http\Controllers\TotallywickedController@getLocation');






