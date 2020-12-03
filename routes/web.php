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

Route::get('/', "TodosController@liste");
Route::post('/action/add', "TodosController@saveTodo");
Route::get('/action/done/{id}', 'TodosController@markAsDone');
Route::get('/action/delete/{id}', 'TodosController@deleteTodo');








Auth::routes();

Route::get('/home', 'TodosController@liste')->name('home');
