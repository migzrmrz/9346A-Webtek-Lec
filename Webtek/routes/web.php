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
    return view('welcome');
});

Route::get('/index', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/quiz', 'PagesController@quiz')->name('quiz');
Route::get('/courses', 'PagesController@courses')->name('courses');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/login', 'PagesController@login')->name('login');
Route::get('/register', 'PagesController@register')->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
