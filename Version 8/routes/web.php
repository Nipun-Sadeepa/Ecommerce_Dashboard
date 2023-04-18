<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('man', [RegisterController::class, 'index']);
// Route::get('/man','RegisterController@index');



