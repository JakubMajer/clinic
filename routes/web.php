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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/owner', 'OwnerController@index')->name('owners.index');
Route::get('/owner/create', 'OwnerController@create');

Route::get('/pet', 'PetController@index')->name('pets.index');
Route::get('/pet/create', 'PetController@create');

Route::get('/search', 'SearchController@index')->name('search.index');


