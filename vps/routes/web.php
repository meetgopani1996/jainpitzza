<?php

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
    return view('login');
});


Route::get('/layout', function () {
    return view('layout');
});


Route::get('/chartjs', function () {
    return view('datarep.bargraph');
});


Route::get('/table', function () {
    return view('table');
});


Route::get('/calendar', function () {
    return view('calendar');
});


Route::get('/form', function () {
    return view('patient_reg');
});
