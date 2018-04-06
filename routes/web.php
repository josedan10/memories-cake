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
    return view('frontend.home');
});

Route::get('cakes-and-cupcakes', 'CakesAndCupcakesController@index');
Route::get('discover-memories', 'DiscoverMemoriesController@index');
Route::get('our-services', 'OurServicesController@index');
Route::get('order', 'OrderController@index');
Route::get('contact', 'ContactController@index');