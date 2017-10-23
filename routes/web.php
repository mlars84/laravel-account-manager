<?php

 


Route::get('/', 'AccountsController@index');
Route::get('/create', 'AccountsController@create');

// Route::post('/posts', 'AccountsController@store');
Route::post('addAccount', 'AccountsController@store');