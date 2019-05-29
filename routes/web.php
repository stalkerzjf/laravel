<?php


Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

