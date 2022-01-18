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

Route::get('/tutorial', 'TutorialController@index')->name('tutorial');

Route::get('/tutorial/create', 'TutorialController@create')->name('tutorial.create');
Route::get('/tutorial/{id}', 'TutorialController@show')->name('tutorial.show');
Route::post('/tutorial', 'TutorialController@store')->name('tutorial.store');

 Route::get('/tutorial/{tutorial}/edit', 'TutorialController@edit');
 Route::put('/tutorial/{tutorial}', 'TutorialController@update');
 Route::get('/tutorial/{tutorial}/delete', 'TutorialController@destroy');

 // REGISTRO DE TAREFAS
 Route::get('/registro-tarefa', 'RegistroTarefaController@index')->name('registro-tarefa');

 Route::get('/registro-tarefa/create', 'RegistroTarefaController@create')->name('registro-tarefa.create');
 Route::post('/registro-tarefa', 'RegistroTarefaController@store')->name('registro-tarefa.store');

 //apis

 


 