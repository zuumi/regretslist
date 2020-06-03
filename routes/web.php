<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){ return view('welcome'); });
Route::get('/todolist','TodolistController@get')->middleware('auth');
Route::get('/todolist','TodolistController@page')->middleware('auth');
Route::get('/add','TodolistController@add')->middleware('auth');
Route::post('/add','TodolistController@create');
Route::get('/edit/{id}','TodolistController@edit')->middleware('auth');
Route::get('/edit','TodolistController@edit')->middleware('auth');
Route::post('/edit','TodolistController@update');
Route::get('/del/{id}','TodolistController@del')->middleware('auth');
Route::get('/del','TodolistController@del')->middleware('auth');
Route::post('/del','TodolistController@remove');
Route::get('/show','TodolistController@show')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
