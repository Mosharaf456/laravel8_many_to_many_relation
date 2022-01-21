<?php

use Illuminate\Support\Facades\Route;

Route::get('/authors' , 'AuthorsControllers@index');

Route::get('/authors/create' , 'AuthorsControllers@create');
Route::post('/authors/create' , 'AuthorsControllers@store');

Route::get('/books' , 'BooksControllers@index');

Route::get('/books/create' , 'BooksControllers@create');
Route::post('/books/create' , 'BooksControllers@store');

// edit
Route::get('/books/{id}/edit' , 'BooksControllers@edit');
Route::patch('/books/{id}/edit' , 'BooksControllers@update');

