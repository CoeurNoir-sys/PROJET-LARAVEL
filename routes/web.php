<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/buttons', function () {
    return view('buttons');
})->name('buttons');

Route::get('/cards', function () {
    return view('cards');
})->name('cards');

Route::get('/charts', function () {
    return view('charts');
})->name('charts');

Route::get('/tables', function () {
    return view('tables');
})->name('tables');

Route::get('/utilities-color', function () {
    return view('utilities-color');
})->name('utilities-color');

Route::get('/utilities-border', function () {
    return view('utilities-border');
})->name('utilities-border');

Route::get('/utilities-animation', function () {
    return view('utilities-animation');
})->name('utilities-animation');

Route::get('/utilities-other', function () {
    return view('utilities-other');
})->name('utilities-other');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/blank', function () {
    return view('blank');
})->name('blank');
