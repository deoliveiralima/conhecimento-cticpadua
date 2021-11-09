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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/link', 'LinkController@index')->name('links');

Route::get('/link/create', 'LinkController@create')->name('link.create');

Route::post('/link', 'LinkController@store');

 Route::get('/link/{link}/edit', 'LinkController@edit');
 Route::put('/link/{link}', 'LinkController@update');
 Route::get('/link/{link}/delete', 'LinkController@destroy');
 
 //TUTORIAL

 Route::get('/tutorial', 'TutorialController@index')->name('links');

Route::get('/tutorial/create', 'TutorialController@create')->name('link.create');

Route::post('/tutorial', 'TutorialController@store');

 Route::get('/tutorial/{tutorial}/edit', 'TutorialController@edit');
 Route::put('/tutorial/{tutorial}', 'TutorialController@update');
 Route::get('/tutorial/{tutorial}/delete', 'TutorialController@destroy');
