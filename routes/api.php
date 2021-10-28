<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('products', 'App\Http\Controllers\Api\ProductController@index')->name('products.index');


Route::get('products/{id}', 'App\Http\Controllers\Api\ProductController@show')->name('products.show');


Route::post('products', 'App\Http\Controllers\Api\ProductController@store')->name('products.store');


Route::put('products/{id}', 'App\Http\Controllers\Api\ProductController@update')->name('products.update');

Route::patch('products/{id}', 'App\Http\Controllers\Api\ProductController@update')->name('products.update');


Route::delete('products/{id}', 'App\Http\Controllers\Api\ProductController@destroy')->name('products.destroy');