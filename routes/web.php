<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use App\Link;
use App\LogoHeader;
use App\Carousel;
use App\Presentation;
use App\Testimonial;
use App\Service;
use App\Team;
use App\Ready;
use App\Contact;
use App\Post;
use App\Feature;

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
    $services=Service::all();
    $lastServices= $services->sortBy('key')->take(-6);

    $lastsfirsts = $lastServices->sortBy('key')->take(3);
    $lastslasts = $lastServices->sortBy('key')->take(-3);

    $feature=Feature::find(1);

    // $lasts = Service::table('service')->latest(6)->first();
    return view('services', compact('link', 'logoHeader', 'services','lastServices', 'lastsfirsts','lastslasts',
                                    'feature'  ));})->name('services');





Route::get('/blog', function () {
    $link=Link::find(1);
    $posts=Post::all();
    $logoHeader=LogoHeader::find(1);

    return view('blog', compact('link', 'logoHeader', 'posts'));})->name('blog');

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
    $teams = Team::all();
    $ready=Ready::find(1);
    $contact=Contact::find(1);
    $number=[$services];
  
    return view('welcome', compact('link', 'logoHeader', 'carousels', 'presentation',
                                'testimonials', 'services','randoms','teams','ready','contact',
                                'number',
                                
                            ));})->name('welcome');

//---------------------------------




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'UserController@profile')->name('profile');
Route::post('profile', 'UserController@updateAvatar');

Route::get('admin/users/index', 'UserController@index');
Route::get('admin/users/create', 'UserController@create')->name('user.create');
Route::get('admin/users/edit', 'UserController@edit')->name('user.edit');
Route::get('admin/users/destroy', 'UserController@destroy')->name('user.destroy');


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

// CRUD du Team
Route::resource('/admin/team', 'TeamController');

// SECTION READY
Route::get('/admin/ready', 'ReadyController@index')->name('ready');
Route::post('/admin/ready/store', 'ReadyController@store')->name('ready.store');
Route::post('/admin/ready/update', 'ReadyController@update')->name('ready.update');

// SECTION Contact
Route::get('/admin/contact', 'ContactController@index')->name('contact2');
Route::post('/admin/contact/store', 'ContactController@store')->name('contact.store');
Route::post('/admin/contact/update', 'ContactController@update')->name('contact.update');



// CRUD du Post
Route::resource('/admin/post', 'PostController');



// Image du segvice Features
Route::get('/admin/imgFeatures', 'img_featuresController@index')->name('imgFeatures');
Route::post('/admin/imgFeatures/store', 'img_featuresController@store')->name('imgFeatures.store');
Route::post('/admin/imgFeatures/update', 'img_featuresController@update')->name('imgFeatures.update');