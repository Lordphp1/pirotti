<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('index');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/project', function () {
    return view('projects');
});
Route::get('/project-details', function () {
    return view('project-details');
});
Route::get('/project-details2', function () {
    return view('project-details-two');
});
Route::get('/blog-classic', function () {
    return view('blog-classic');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/appointment', function () {
    return view('appointment');
});