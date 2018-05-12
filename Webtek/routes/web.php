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
Route::get('/', 'PagesController@home')->name('home');
Route::get('/htmlQuiz', 'PagesController@htmlQuiz')->name('htmlQuiz');
Route::get('/cssQuiz', 'PagesController@cssQuiz')->name('cssQuiz');
Route::get('/htmlQuestionsPage', 'PagesController@htmlQuestionsPage')->name('htmlQuestions');
Route::get('/cssQuestionsPage', 'PagesController@cssQuestionsPage')->name('cssQuestions');
Route::get('/htmlFinal', 'PagesController@htmlFinal')->name('htmlFinal');
Route::get('/htmlCourse', 'PagesController@htmlCourse')->name('htmlCourse');
Route::get('/cssCourse', 'PagesController@cssCourse')->name('cssCourse');
Route::get('/phpCourse', 'PagesController@phpCourse')->name('phpCourse');
Route::get('/jsCourse', 'PagesController@jsCourse')->name('jsCourse');
Route::get('/nodeJSCourse', 'PagesController@nodeJSCourse')->name('nodeJSCourse');
Route::get('/jspCourse', 'PagesController@jspCourse')->name('jspCourse');
Route::get('/javaServletCourse', 'PagesController@javaServletCourse')->name('javaServletCourse');
Route::get('/OWASPcourse', 'PagesController@OWASPcourse')->name('OWASPcourse');

Auth::routes();

