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
Route::get('/city', 'CityController@getAllCity');
Route::post('/add-person', 'PersonController@addPerson');
Route::get('/person','PersonController@getAllPerson');
Route::get('/deleteperson/{rank}','PersonController@deletePerson');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
