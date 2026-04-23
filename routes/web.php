<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/contact', function(Request $request) {
    dd($request->all());
})->name('contact_inquiry');