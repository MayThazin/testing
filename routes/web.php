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
    return view('/home/index');
});

Route::get('/departments', function () {
    return view('/departments/index');
});

Route::get('/departmentsone', function () {
    return view('/departments/one-department');
});

Route::get('/subject-overview', function () {
    return view('/subjects/index');
});

Route::get('/subject-details', function () {
    return view('/subjects/syllabus&curriculum');
});