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


Route::get('/admin/spec','SpecController@index')->name('spec');
Route::get('/admin/addSpec','SpecController@create')->name('addSpec');
Route::post('/admin/saveSpec','SpecController@store')->name('saveSpec');
Route::get('/admin/editSpec/{id}','SpecController@edit')->name('editSpec');
Route::post('/admin/updateSpec/{id}','SpecController@update')->name('updateSpec');
Route::get('/admin/deleteSpec/{id}','SpecController@destroy')->name('deleteSpec');


Route::get('/admin/categorie','CategorieController@index')->name('categorie');
Route::get('/admin/addCategorie','CategorieController@create')->name('addCategorie');
Route::post('/admin/saveCategorie','CategorieController@store')->name('saveCategorie');
Route::get('/admin/editCategorie/{id}','CategorieController@edit')->name('editCategorie');
Route::post('/admin/updateCategorie/{id}','CategorieController@update')->name('updateCategorie');
Route::get('/admin/deleteCategorie/{id}','CategorieController@destroy')->name('deleteCategorie');

Route::get('/admin/special','SpecialController@index')->name('special');
Route::get('/admin/addSpecial','SpecialController@create')->name('addSpecial');
Route::post('/admin/saveSpecial','SpecialController@store')->name('saveSpecial');
Route::get('/admin/editSpecial/{id}','SpecialController@edit')->name('editSpecial');
Route::post('/admin/updateSpecial/{id}','SpecialController@update')->name('updateSpecial');
Route::get('/admin/deleteSpecial/{id}','SpecialController@destroy')->name('deleteSpecial');

Route::get('/admin/role','RoleController@index')->name('role');
Route::get('/admin/addRole','RoleController@create')->name('addRole');
Route::post('/admin/saveRole','RoleController@store')->name('saveRole');
Route::get('/admin/editRole/{id}','RoleController@edit')->name('editRole');
Route::post('/admin/updateRole/{id}','RoleController@update')->name('updateRole');
Route::get('/admin/deleteRole/{id}','RoleController@destroy')->name('deleteRole');

Route::get('/admin/profile','ProfileController@index')->name('profile');
Route::get('/admin/editProfile','ProfileController@edit')->name('editProfile');
Route::post('/admin/updateProfile','ProfileController@update')->name('updateProfile');
Route::get('/admin/deleteProfile','ProfileController@destroy')->name('deleteProfile');

Route::get('/admin/user','UserController@index')->name('user');
Route::get('/admin/editUser/{id}','UserController@edit')->name('editUser');
Route::post('/admin/updateUser/{id}','UserController@update')->name('updateUser');
Route::get('/admin/deleteUser/{id}','UserController@destroy')->name('deleteUser');


Route::get('/admin/addTestimonial','TestimonialController@create')->name('addTestimonial');
Route::post('/admin/saveTestimonial','TestimonialController@store')->name('saveTestimonial');
Route::get('/admin/editTestimonial','TestimonialController@edit')->name('editTestimonial');
Route::post('/admin/updateTestimonial','TestimonialController@update')->name('updateTestimonial');
Route::get('/admin/deleteTestimonial','TestimonialController@destroy')->name('deleteTestimonial');