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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    
});

Route::get('/link', 'LinkController@linksJson');
Route::get('/link/{id}', 'LinkController@edit');
Route::post('/link', 'LinkController@store');
Route::put('/link/{id}', 'LinkController@update');
Route::delete('/link/{id}', 'LinkController@destroy');

//tutoriais

Route::get('/tutorial', 'TutorialController@list');
Route::get('/tutorial/{id}', 'TutorialController@edit');
Route::post('/tutorial', 'TutorialController@store');
Route::put('/tutorial/{id}', 'TutorialController@update');
Route::delete('/tutorial/{id}', 'TutorialController@destroy');


 