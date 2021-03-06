<?php

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
Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('welcome', 'WelcomeController@index')->name('welcome');

Route::patch('/editarUsr', 'UsuarioController@update')->name('editarUsr');
Route::get('/pagEditar', 'UsuarioController@pagEditar')->name('pagEditar');
Route::post('/deletarUsr', 'UsuarioController@destroy')->name('deletarUsr');
Route::get('/pagDeletar', 'UsuarioController@pagDeletar')->name('pagDeletar');

Route::get('/auth/password/reset', 'Auth\PasswordController@getResetAuthenticatedView')->name('auth/password/reset');
Route::post('/auth/password/reset', 'Auth\PasswordController@resetAuthenticated')->name('auth/password/reset');
