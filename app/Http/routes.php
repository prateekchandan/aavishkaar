<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', array('as'=>'home','uses'=>'WelcomeController@index'));

Route::get('/pronites/{event}', array('uses'=>'WelcomeController@pronites'));
Route::get('/pronites', array('as'=>'pronites','uses'=>'WelcomeController@pronites'));


Route::get('/competitions/{event}', array('uses'=>'WelcomeController@test1'));
Route::get('/competitions', array('as'=>'competitions','uses'=>'WelcomeController@test1'));

Route::get('/informals/{event}', array('uses'=>'WelcomeController@test1'));
Route::get('/informals', array('as'=>'informals','uses'=>'WelcomeController@test1'));

Route::get('/excelsior/{event}', array('uses'=>'WelcomeController@test1'));
Route::get('/excelsior', array('as'=>'excelsior','uses'=>'WelcomeController@test1'));

Route::get('/highlights/{event}', array('uses'=>'WelcomeController@test1'));
Route::get('/highlights', array('as'=>'highlights','uses'=>'WelcomeController@test1'));

Route::get('/contact', array('as'=>'contact','uses'=>'WelcomeController@contact'));


Route::get('/test', 'WelcomeController@test1');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);