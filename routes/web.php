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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Praktikum 1  
Route::get('/', function () {
    echo "Selamat Datang";
});
Route::get('/about', function () {
    return '1941720016, Fitri Mutiara Devi';
});
Route::get('/artikel/{id}', function ($id) {
    echo 'Halaman Artikel' .$id;
});