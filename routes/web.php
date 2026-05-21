<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/experience', 'experience')->name('experience');
Route::view('/skills', 'skills')->name('skills');
Route::view('/projects', 'projects')->name('projects');
Route::view('/certificates', 'certificates')->name('certificates');
Route::view('/training', 'training')->name('training');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/messages', [ContactController::class, 'index'])->name('messages');
