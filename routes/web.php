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

Route::get('/home', 'App\DaF\View\HomeController@index')->middleware('auth');

Route::get('login', ['as' => 'auth.login', 'uses' => 'App\DaF\Security\LoginController@showLoginForm']);
Route::post('login', ['as' => 'auth.login', 'uses' => 'App\DaF\Security\LoginController@login']);
Route::post('logout', ['as' => 'auth.logout', 'uses' => 'App\DaF\Security\LoginController@logout']);

// Registration Routes...
Route::get('register', ['as' => 'auth.register', 'uses' => 'App\DaF\Security\RegisterController@showRegistrationForm']);
Route::post('register', ['as' => 'auth.register', 'uses' => 'App\DaF\Security\RegisterController@register']);

// Password Reset Routes...
Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'App\DaF\Security\ResetPasswordController@showResetForm']);
Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'App\DaF\Security\ForgotPasswordController@sendResetLinkEmail']);
Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'App\DaF\Security\ResetPasswordController@reset']);