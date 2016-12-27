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


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'UsersController@index');
Route::get('/contact','WelcomeControllers@contact');
Route::get('/about','WelcomeControllers@about');
Route::get('/demo',function(){
    return 'Đây là demo đầu tiên';
});
//Route::get('/articles','ArticlesController@index');
//Route::get('/articles/create','ArticlesController@create');
//Route::post('/articles','ArticlesController@store');

Route::resource('articles','ArticlesController');
//user
//Route::controllers([
//    'auth'=>'Auth\AuthController',
//    'password'=> 'Auth\PasswordController'
//]);

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('user/list','UsersController@get_all');
Route::get('user/delete', 'UsersController@delete');
Route::post('user/store', 'UsersController@store');
Route::get('user/index', 'UsersController@index');
Route::resource('user','UsersController');
//department
Route::get('dep/list','DepartmentsController@get_all');
Route::resource('dep','DepartmentsController');


//home
Route::get('/home',function(){
    return view('home');
});

