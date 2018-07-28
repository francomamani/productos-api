<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//localhost:8000/api/productos
Route::get('productos', 'ProductoController@index');
Route::get('productos/{idproducto}', 'ProductoController@show');
Route::post('productos', 'ProductoController@store');
Route::put('productos/{idproducto}', 'ProductoController@update');
Route::delete('productos/{idproducto}', 'ProductoController@destroy');










