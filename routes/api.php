<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/events/{id}', 'EventApiController@find');
Route::get('/guests', 'GuestApiController@index');
Route::get('/guests/{id}', 'GuestApiController@find');
Route::get('/artists', 'ArtistApiController@index');
Route::get('/artists/{id}', 'ArtistApiController@find');
Route::get('/testimonials', 'TestimonialApiController@index');
Route::get('/testimonials/{id}', 'TestimonialApiController@find');
Route::get('/tickets', 'TicketApiController@index');
Route::get('/tickets/{id}', 'TicketApiController@find');


Route::middleware('jwt.auth')->post('/invintation', 'InvintationApiController@create');
Route::middleware('jwt.auth')->post('/checkout', 'OrdersApiController@create');
Route::middleware('jwt.auth')->post('/sendtestimonial', 'TestimonialApiController@create');



// -- jwt auth
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login')->name('login');
Route::post('/logout', 'AuthController@logout')->name('logout');