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

Route::get('/', 'SurveysController@index');

Auth::routes();

Route::get('/survey','SurveysController@add');
Route::post('/survey','SurveysController@create');

Route::get('/survey/{survey}','SurveysController@edit');
Route::post('/survey/{survey}','SurveysController@update');