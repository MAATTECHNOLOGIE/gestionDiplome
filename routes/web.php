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



//Vue Notre  histoire 
Route::get('/', 'ClientController@index')->name('index');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Vue Notre  administrateur 
Route::get('/admin', 'HomeController@index')->name('admin');

//ROute client
Route::get('/typeGrade','HomeController@typeGrade')->name('typeGrade');

Route::get('/listGrade','HomeController@listGrade')->name('listGrade');
