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
//Navigation between differents pages

Route::get('/services', function () {return view('services');})->name('services');
Route::get('/blog', function () {return view('blog');})->name('blog');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/elements', function () {return view('elements');})->name('elements');





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
