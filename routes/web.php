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

Route::get('/', 'ProjectsController@welcome');

Route::get('/projects', 'ProjectsController@index'); // menampilkan semua
Route::get('/projects/create', 'ProjectsController@insert'); // menampilkan halaman form
Route::post('/projects', 'ProjectsController@create'); // menyimpan data
Route::get('/items/{id}', 'ProjectsController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ProjectsController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ProjectsController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ProjectsController@destroy'); // menghapus data dengan id