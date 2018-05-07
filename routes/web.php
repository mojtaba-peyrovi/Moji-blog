<?php

Route::get('/','PostsController@index');
//Route::get('/posts/{post}','PostsController@show');
Route::get('/posts/create','PostsController@create');
Route::POST('/posts','PostsController@store');
