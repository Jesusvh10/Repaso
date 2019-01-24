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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


/*Route::group(['middleware' => 'auth:api'], function() {

    Route::get('user', 'AuthController@user');

});*/


Route::group(['middleware' => 'auth:api'], function() {

    //Route::get('user', 'AuthController@user');
    //Route::post('login', 'RepController@login');
    Route::post('register', 'RepController@signup');
    Route::get('mostrar', 'RepController@mostrar');
    Route::get('mostrar_id/{id}', 'RepController@mostrar_id');
    Route::post('actualizar/{id}','RepController@actualizar');
    Route::post('delete/{id}','RepController@delete');

});

