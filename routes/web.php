<?php

//Route::get('/', 'NoteMaskController@test')->name('test');

Route::get('/', 'NoteMaskController@main')->name('main');

Route::get('/lng/{lng}', 'NoteMaskController@lng')->name('lng');

Route::get('/contact', 'NoteMaskController@contact')->name('contact');
Route::post('/contact', 'NoteMaskController@form')->name('form');

Route::get('/policy', 'NoteMaskController@policy')->name('policy');

Route::get('/ready', 'NoteMaskController@ready')->name('ready');
Route::get('/error', 'NoteMaskController@error')->name('error');

Route::post('/create', 'NoteMaskController@create')->name('create');
Route::post('/confirm', 'NoteMaskController@confirm')->name('confirm');
Route::post('/psw', 'NoteMaskController@password')->name('password');
Route::post('/d', 'NoteMaskController@destroy')->name('destroy');

Route::get('/{id}', 'NoteMaskController@note')->where(['id' => '[a-z0-9]+']);

// --------------------------------------------
//    https://privnote.com