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

Route::get('/front', function () {
    return "hello word ";
});


Route::view('/test','test');









// Route::view('about-me', "about");

// Route::view ('contact-me', "contact", ['page' => 'contact Me Page']);



// Auth::routes();

// Route::get('home', 'HomeController@index')->name('home');
