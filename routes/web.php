<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register-form', function() {
    return view('register-form');
})->name('register-form.index');
