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

Route::get('/satu', function () {
    // return view('welcome');
    echo "one";
});

Route::get('/dua', function () {
    // return view('welcome');
    echo "two";
});

Route::get('/tiga', function () {
    // return view('welcome');
    echo "three";
});

Route::get('/empat', function () {
    // return view('welcome');
    echo "four";
});

Route::get('/lima', function () {
    // return view('welcome');
    echo "five";
});

Route::get('/enam', function () {
    // return view('welcome');
    echo "six";
});

Route::get('/tujuh', function () {
    // return view('welcome');
    echo "seven";
});

Route::get('/delapan', function () {
    // return view('welcome');
    echo "eight";
});

// 1. echo langsung nested
/* Route::get('/', function () {
    return view ('template');
}); */


// 3. manggil controler
Route::get('/usang', 'UsangController@index');
/*  
    file controllernya namanya usangController
    nama url usang
    index nama functionnya
*/

Route::get('/jeruk', 'UsangController@godog');

Route::get('/', 'kontrak@index');

Route::get('/cleaningservice', 'cleanerController@index');

// Route::resource('/satpam', 'Satpam');
Route::resource('/kontak', 'Kontak');

Route::resource('/kabupaten', 'Kabupaten');

Route::get('/', function () {
    return view ('index');
});
