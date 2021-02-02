<?php

use Illuminate\Support\Facades\Route;
use App\Country;
use App\City;

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
    return view('start');
});

Route::get('/countries', 'CountryController@index');
Route::get('/detail/{country}','CountryController@show');
Route::get('/search/', 'CountryController@search')->name('search');

Route::get('/cities','CityController@index');

// Меню - список континентов -> список государств по континентам
Route::get('/continent', 'CountryController@listContinent');
Route::get('/continentCountry/{continent}', 'CountryController@listContinent');
