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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('course', 'CourseController');

Route::resource('class', 'ClassController');

Route::resource('event', 'EventController');

Route::resource('frequency', 'FrequencyController');

Route::resource('assessment', 'AssessmentController');

Route::resource('participation', 'ParticipationController');

Route::resource('extraclass', 'ExtraClassController');

Route::resource('ppt','PptController');

Route::resource('student','StudentController');

Route::resource('secretary','SecretaryController');

Route::resource('sponsor','SponsorController');

Route::resource('teacher','TeacherController');

Route::resource('user','UserController');

//Rota para o Historico do Estudante
Route::get('student/history',['uses'=>'StudentController@history']);

Route::get('student/myfrequency',['uses'=>'StudentController@myFrequency']);

Route::get('email', function () {
    return view('email.index');
});

Route::get('menuteacher', function () {
	return view ('menuteacher.index');
});

Route::get('menustudent', function () {
	return view ('menustudent.index');
});

Route::get('menusecretary', function () {
	return view ('menusecretary.index');
});

Route::get('menuadm', function () {
	return view ('menuadm.index');
});

Route::get('menusponsor', function () {
	return view ('menusponsor.index');
});

Route::get('menu', function () {
	return view ('menu.index');
});

//Routes para Auth
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

