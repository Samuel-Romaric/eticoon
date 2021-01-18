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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index')->name('home');

Route::get('reseaux-et-securite', 'PagesController@reseaux')->name('reseaux');

Route::get('solutions', 'PagesController@solutions')->name('solutions');

Route::get('formations', 'PagesController@formations')->name('formations');

Route::get('temoins', 'PagesController@temoignages')->name('temoignages');

Route::get('contact', 'PagesController@contact')->name('contact');