<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});



Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/reminder', function () {
    return view('reminder');
});

Route::get('/money-planning', function () {
    return view('money-planning');
});

Route::get('/memo', function () {
    return view('memo');
});
