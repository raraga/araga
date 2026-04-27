<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/contact', ContactController::class)->name('contact_inquiry');

Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
