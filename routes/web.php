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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/",function() 
{
	return view("tugas.index");
});

Route::get('/data-tables',function() 
{
	return view("tugas.dataTable");
});



// CRUD 

Route::get('/pertanyaan/create','pertanyaanController@create');
Route::get('/pertanyaan','pertanyaanController@index')->name('home_pertanyaan');
Route::post('/pertanyaan','pertanyaanController@store')->name('create');

Route::get('/jawabban/{id}','jawabbanController@index');
Route::get('/jawabban/create/{id}','jawabbanController@create');
Route::post('/jawabban','jawabbanController@store')->name('create_jawab');
