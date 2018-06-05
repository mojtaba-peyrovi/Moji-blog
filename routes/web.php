<?php

use Illuminate\Support\Facades\Storage;

Route::get('/posts','PostsController@index')->name('index');
Route::get('/posts/{post}','PostsController@show');
Route::get('/post/create','PostsController@create');
Route::POST('/posts','PostsController@store');
Route::POST('/posts/{post}/comments','CommentsController@store');
Route::get('/register','RegistrationController@create')->name('register');
Route::POST('/register', 'RegistrationController@store');
Route::get('/login','SessionsController@create')->name('login');
Route::POST('/login','SessionsController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','SessionsController@destroy');
Route::get('/users/{user}','useController@show');
