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
Route::get('/home/players', 'PlayerController@index');
Route::get('/home/teams', 'TeamController@index');
Route::get('/home/ranking', 'TeamController@ranking');
Route::get('/logout/users', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group( function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::prefix('players')->group( function(){
Route::get('/list', 'PlayerController@list');
Route::get('/create', 'PlayerController@create');
Route::post('/create', 'PlayerController@store');
Route::get('/{id}', 'PlayerController@show');

});

Route::prefix('teams')->group( function() {
  Route::get('/', 'TeamController@index');
  Route::get('/create', 'TeamController@create');
  Route::post('/create', 'TeamController@store');
  Route::get('/{id}', 'TeamController@show');
});

Route::get('/ranking', 'TeamController@ranking');

Route::prefix('coaches')->group( function(){
Route::get('/', 'CoachController@index');
Route::get('/create', 'CoachController@create');
Route::post('/create', 'CoachController@store');
});

Route::prefix('users')->group( function() {
  Route::get('/', 'UserController@index');
  Route::get('/{id}', 'UserController@show');
});
