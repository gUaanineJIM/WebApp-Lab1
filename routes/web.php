<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for homepage
Route::get('/homepage', function (){
    return view('homepage');
});

// Route for about
Route::get('/about', function (){
    return view('about');
});

// Route for content
Route::get('/content', function (){
    return view('content');
});