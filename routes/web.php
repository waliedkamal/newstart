<?php

use App\Http\Controllers\BlogpostController;
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
// Route::view('about-me', "about");

// Route::view ('contact-me', "contact", ['page' => 'contact Me Page']);
    
// Route:: resource('/posts','BlogpostController');

// Auth::routes();

// Route::get('home', 'HomeController@index')->name('home');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
