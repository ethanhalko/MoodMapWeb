<?php

Route::get('/', 'HomeController@index')->before('auth');
Route::post('/add', 'HomeController@addMood');
Route::get('/about', 'HomeController@about');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@register');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');

Route::get('/statistics', 'StatsController@index')->before('auth');