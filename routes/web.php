<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/single-post', function () {
    return view('single-post');
});
Route::get('/starter-page', function () {
    return view('starter-page');
});