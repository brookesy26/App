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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnaires/create', 'QuestionnaireController@create')->name('questionnaires.create');

Route::post('/questionnaires/create', 'QuestionnaireController@store')->name('questionnaires.store');

Route::get('/questionnaires/{questionnaire}', 'QuestionnaireController@show')->name('questionnaires.show');

Route::post('/questionnaires/show', 'QuestionnaireResponseController@create')->name('questionnaires.show');
Route::post('/questionnaires/show', 'QuestionnaireResponseController@create')->name('questionnaires.show');
