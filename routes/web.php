<?php

//Route::get('/', 'NoteMaskController@test')->name('test');

Route::get('/', 'NoteMaskController@main')->name('main');

Route::get('/lng/{lng}', 'NoteMaskController@lng')->name('lng');

Route::get('/ready', 'NoteMaskController@ready')->name('ready');
Route::get('/error', 'NoteMaskController@error')->name('error');

Route::post('/create', 'NoteMaskController@create')->name('create');
Route::post('/confirm', 'NoteMaskController@confirm')->name('confirm');
Route::post('/psw', 'NoteMaskController@password')->name('password');

Route::get('/{id}', 'NoteMaskController@note')->where(['id' => '[a-z0-9]+']);

// --------------------------------------------
//    https://privnote.com