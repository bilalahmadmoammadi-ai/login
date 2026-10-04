<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/submit_complaint', function () {
    return view('submit_complaint');
});
Route::get('/submit_suggestion', function () {
    return view('submit_suggestion');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/track_complaint', function () {
    return view('track_complaint');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/auth/login', function(){
    return view('login');
});