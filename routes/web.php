<?php

Route::get('/posts','PostsController@index');
Route::get('/posts/{post}','PostsController@show');
Route::get('/post/create','PostsController@create');
Route::POST('/posts','PostsController@store');
