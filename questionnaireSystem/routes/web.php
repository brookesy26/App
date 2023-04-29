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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/', 'pullDataController@questionnaireLoad')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'QuestionnaireController@index')->name('home');

Route::get('/questionnaires/create', 'QuestionnaireController@create')->name('questionnaires.create');

Route::post('/questionnaires/create', 'QuestionnaireController@store')->name('questionnaires.store');

Route::put('/questionnaire/{id}', 'QuestionnaireController@updateStatus')->name('questionnaires.update');

Route::get('/questionnaires/{questionnaire}/edit', 'QuestionnaireController@edit')->name('questionnaires.edit');

Route::get('/questionnaires/{questionnaire}', 'pullDataController@show')->name('questionnaires.show');

Route::get('/questionnaires/{questionnaire}/response', 'QuestionnaireController@viewResponse')->name('questionnaires.response');

Route::put('/questionnaires/{questionnaire}', 'QuestionnaireController@editQuestionnaire')->name('questionnaires.updateQuestionnaire');

Route::post('/questionnaires/{questionnaire}/submit-response','QuestionnaireResponseController@submitResponse')->name('submit.response');

Route::delete('/questionnaires/{questionnaire}', 'QuestionnaireController@destroy')->name('questionnaires.destroy');
