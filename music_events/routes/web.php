<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GenreController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
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
Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/home', [EventsController::class, 'list_events'])->name('home');

Route::get('/genre', [GenreController::class, 'index'])->name('list_genre');
Route::get('/artist', [ArtistController::class, 'index'])->name('list_artist');
Route::get('/venue', [VenueController::class, 'index'])->name('list_venue');
Route::get('/events', [EventsController::class, 'index'])->name('list_events');

Route::get("/add_genre", function(){
   return view("admin.add_genre");
});
Route::post('/genre_create', [GenreController::class, 'create'])->name('genre.create');

Route::get('/delete_genre/{id}',[GenreController::class,'delete_genre']);

Route::get('/update_genre/{id}',[GenreController::class,'update_genre']);

Route::post('/edit_genre',[GenreController::class,'edit_genre'])->name('genre.edit');

//atist
Route::get("/add_artist", function(){
   return view("admin.add_artist");
});
Route::post('/artist_create', [ArtistController::class, 'create'])->name('artist.create');

Route::get('/delete_artist/{id}',[ArtistController::class,'delete_artist']);

Route::get('/update_artist/{id}',[ArtistController::class,'update_artist']);

Route::post('/edit_artist',[ArtistController::class,'edit_artist'])->name('artist.edit');

//venue
Route::get("/add_venue", function(){
   return view("admin.add_venue");
});
Route::post('/venue_create', [VenueController::class, 'create'])->name('venue.create');

Route::get('/delete_venue/{id}',[VenueController::class,'delete_venue']);

Route::get('/update_venue/{id}',[VenueController::class,'update_venue']);

Route::post('/edit_venue',[VenueController::class,'edit_venue'])->name('venue.edit');

Route::get("/layout", function(){
   return view("layouts.bootstrap");
});

//events
Route::get("/add_event", function(){
   return view("admin.add_event");
});
Route::post('/event_create', [EventsController::class, 'create'])->name('venue.create');

Route::get('/delete_event/{id}',[EventsController::class,'delete_event']);

Route::get('/update_event/{id}',[EventsController::class,'update_event']);

Route::post('/edit_event',[EventsController::class,'edit_event'])->name('event.edit');

Route::get("/layout", function(){
   return view("layouts.bootstrap");
});

Route::get("/country",[EventsController::class,'get_country']);