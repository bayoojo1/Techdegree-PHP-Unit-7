<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::apiResource([
//     'to_dos' => 'ToDosController'
// ]);
// Route::get('to_dos','ToDosController@index');
// Route::get('to_dos/{todo}','ToDosController@show');
// Route::put('to_dos/{todo}','ToDosController@update');
// Route::patch('to_dos/{todo}','ToDosController@update');
// Route::delete('to_dos/{todo}','ToDosController@destroy');
// Route::post('to_dos','ToDosController@store');

Route::apiResource('todos','ToDosController');