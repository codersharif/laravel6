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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){  
    return view('about');
});

Route::get('/article','ArticlesController@index')->name('article.index');
Route::post('/article/store','ArticlesController@store')->name('article.store');
Route::get('/article/create','ArticlesController@create');
Route::get('/article/{article}','ArticlesController@show')->name('article.show');

