<?php

use Illuminate\Support\Facades\Route;
use App\Link;
use App\LogoHeader;
use App\Carousel;

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

Route::get('/services', function () {
    $link=Link::find(1);
    $logoHeader=LogoHeader::find(1);

    return view('services', compact('link', 'logoHeader'));})->name('services');

Route::get('/blog', function () {
    $link=Link::find(1);
    $logoHeader=LogoHeader::find(1);

    return view('blog', compact('link', 'logoHeader'));})->name('blog');

Route::get('/contact', function () {
    $link=Link::find(1);
    $logoHeader=LogoHeader::find(1);

    return view('contact', compact('link', 'logoHeader'));})->name('contact');

Route::get('/elements', function () {
    $link=Link::find(1);
    $logoHeader=LogoHeader::find(1);

    return view('elements', compact('link', 'logoHeader'));})->name('elements');

// ----END MULTI PAGE---


// ----- WEEEELLCOOOOMEEEEE -------

Route::get('/', function () {
    $link=Link::find(1);
    $logoHeader=LogoHeader::find(1);
    $carousels=Carousel::all();

    return view('welcome', compact('link', 'logoHeader', 'carousels'));})->name('welcome');

//---------------------------------




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ------------ CRUD -------------------

// Nom des liens page WEB
Route::get('/admin/link', 'LinkController@index')->name('link');
Route::post('/admin/link/store', 'LinkController@store')->name('link.store');
Route::post('/admin/link/update', 'LinkController@update')->name('link.update');
 
// Image du logo Header
Route::get('/admin/logoHeader', 'LogoHeaderController@index')->name('logoHeader');
Route::post('/admin/logoHeader/store', 'LogoHeaderController@store')->name('logoHeader.store');
Route::post('/admin/logoHeader/update', 'LogoHeaderController@update')->name('logoHeader.update');

// CRUD du carousel
Route::resource('/admin/carousel', 'CarouselController');