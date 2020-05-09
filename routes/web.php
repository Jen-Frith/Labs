<?php

use Illuminate\Support\Facades\Route;
use App\Link;
use App\LogoHeader;
use App\Carousel;
use App\Presentation;
use App\Testimonial;
use App\Service;


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
    $presentation=Presentation::find(1);
    $testimonials=Testimonial::all();
    $services=Service::all();
    $randoms=Service::all();
    $randoms = Service::orderByRaw('RAND()')->take(3)->get();


    return view('welcome', compact('link', 'logoHeader', 'carousels', 'presentation',
                                'testimonials', 'services','randoms'));})->name('welcome');

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

// Mini Crud PRESENTATION
Route::get('/admin/presentation', 'PresentationController@index')->name('presentation');
Route::post('/admin/presentation/store', 'PresentationController@store')->name('presentation.store');
Route::post('/admin/presentation/update', 'PresentationController@update')->name('presentation.update');

// CRUD du Testimonial
Route::resource('/admin/testimonial', 'TestimonialController');

// CRUD du Service
Route::resource('/admin/services', 'ServiceController');