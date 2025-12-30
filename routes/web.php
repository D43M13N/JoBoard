<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jobs', function() {
    return '<h1>Available Jobs</h1>';
})->name('jobs');

