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

Route::get('/','WelcomeController@index')->name('home');

Auth::routes();

Route::get('/admin/header','HeaderController@index')->name('header');
Route::get('/admin/addHeader','HeaderController@create')->name('addHeader');
Route::post('/admin/saveHeader','HeaderController@store')->name('saveHeader');
Route::get('/admin/editHeader/{id}','HeaderController@edit')->name('editHeader');
Route::post('/admin/updateHeader/{id}','HeaderController@update')->name('updateHeader');
Route::get('/admin/deleteHeader/{id}','HeaderController@destroy')->name('deleteHeader');

Route::get('/admin/about','AboutController@index')->name('about');
Route::get('/admin/addAbout','AboutController@create')->name('addAbout');
Route::post('/admin/saveAbout','AboutController@store')->name('saveAbout');
Route::get('/admin/editAbout/{id}','AboutController@edit')->name('editAbout');
Route::post('/admin/updateAbout/{id}','AboutController@update')->name('updateAbout');
Route::get('/admin/deleteAbout/{id}','AboutController@destroy')->name('deleteAbout');
