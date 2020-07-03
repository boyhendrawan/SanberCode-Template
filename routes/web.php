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
Route::get("/pertanyaan/show/{id}","pertanyaanController@show");
Route::get('/pertanyaan/{id}/edit',"pertanyaanController@edit");
Route::put('/pertanyaan/{id}','pertanyaanController@update') ->name('update');
Route::delete('/pertanyaan/{id}/delete','pertanyaanController@destroy');


Route::get('/jawabban/{id}','jawabbanController@index');
Route::post('/jawabban/{id}','jawabbanController@store');
