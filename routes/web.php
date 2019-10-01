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
    return view('frontend.home');
});
Route::get('/generic', function () {
    return view('frontend.generic');
});
Route::get('/elements', function () {
    return view('frontend.elements');
});
Route::get('/dashboard', function () {
    return view('backend.adminportal.dashboard');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'user'], function () {
    Route::get('login', 'Frontend\Auth\LoginController@showLoginForm')->name('login');
    Route::post('register', 'Frontend\Auth\RegisterController@register')->name('user.register');
    Route::post('login', 'Frontend\Auth\LoginController@login')->name('user.login');
    Route::post('logout', 'Frontend\Auth\LoginController@logout')->name('logout');
});
//\Illuminate\Support\Facades\Auth::routes();