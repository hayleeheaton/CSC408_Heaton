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

/*Customer Routes*/
Route::resource('/customer', 'ApiCustomerController');
Route::get('/customer/{id}/rentals', 'ApiCustomerController@rentals');

/*Movie Routes*/
Route::resource('/movies', 'ApiMovieController');
Route::get('/movies/{id}/rentals', 'ApiMovieController@rentals');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
