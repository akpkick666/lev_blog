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

Route::get('/', 'PostController@index');
Route::get('/auth/register', 'PostController@register');
Route::get('/auth/login', 'PostController@login');
Route::group(['middleware' => 'auth'], function(){
    Route::get('/match/{id}', 'Admin\UserController@mypage');
    Route::get('/match/{id}/edit', 'Admin\UserController@my_edit');
    Route::put('/match/{id}', 'Admin\UserController@my_update');
    Route::get('/posts/create', 'PostController@create');
    Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::delete('/posts/{post}', 'PostController@delete');
    Route::put('/posts/{post}', 'PostController@update');
    Route::get('/posts/{post}', 'PostController@show');
    Route::post('/posts', 'PostController@store');
});    
    
Auth::routes();

