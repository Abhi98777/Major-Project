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
    return view('welcome');
});

Route::get('/abc', function () {
    echo "anshu";
})->name('abcdef');

Route::get('/aaryan', function() {
    echo "Welcome To Php";
})->name('register');

Route::get('/abc','TestController@index')->name('login');

Route::get('/table','TestController@table')->name('table');


Route::get('/rahul', function() {
    echo "Welcome ";
})->name('bit');