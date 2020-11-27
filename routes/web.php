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

Route::get('/', 'PagesController@index');
Route::get('/meals', 'PagesController@meals');
Route::get('/drinks', 'PagesController@drinks');
Route::get('/ingredients', 'PagesController@ingredients');
Route::get('/categories', 'PagesController@categories');

Route::get('/index_de', 'GermanPagesController@index_de');
Route::get('/spasien', 'GermanPagesController@mahlzeit');
Route::get('/trinken', 'GermanPagesController@trinken');
Route::get('/zutats', 'GermanPagesController@zutat');
Route::get('/kategorien', 'GermanPagesController@kategori');

Route::get('/index_it', 'ItalianPagesController@index_it');
Route::get('/farina', 'ItalianPagesController@farina');
Route::get('/bevanda', 'ItalianPagesController@bevanda');
Route::get('/ingredi', 'ItalianPagesController@ingredi');
Route::get('/catego', 'ItalianPagesController@catego');

Route::get('/details/{id}', 'DetailsController@show');
Route::get('/drinksDetails/{id}', 'DetailsController@showDrinks');

Route::get('/de_details/{id}', 'De_DetailsController@show');
Route::get('/de_drinksDetails/{id}', 'De_DetailsController@showDrinks');

Route::get('/it_details/{id}', 'It_DetailsController@show');
Route::get('/it_drinksDetails/{id}', 'It_DetailsController@showDrinks');