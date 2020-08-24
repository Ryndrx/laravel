<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index');
});

Route::get('/about', function () {
    $nama = 'Rayandra Krisna';
    return view('about', ['nama' => $nama]);
});

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

// Students

Route::get('/students', 'StudentsController@index');
Route::get('/students/{student}', 'StudentsController@show');