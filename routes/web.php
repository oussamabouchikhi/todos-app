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

// make a route for todos page 127.0.0.1:8000/todos 
Route::get('/todos', 'todosController@index');

// make a route for todos page 127.0.0.1:8000/todos/id 
Route::get('/todos/{todo}', 'todosController@show');

// make a route for todos page 127.0.0.1:8000/create 
Route::get('/create', 'todosController@create');

// when clicking add todo button 
Route::post('/create', 'todosController@store') ;

// make a route for todos page 127.0.0.1:8000/todos/id/edit
Route::get('/todos/{todo}/edit', 'todosController@edit') ;
Route::post('/todos/{todo}', 'todosController@update') ;

// delete a todo
Route::get('/todos/{todo}/delete', 'todosController@destroy') ;