<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();
//    Route::post('login', 'Auth\AuthController@login');
//    Route::get('login', 'Auth\AuthController@showLoginForm');
//    Route::post('register', 'Auth\AuthController@register');
//    Route::get('register', 'Auth\AuthController@showRegistrationForm');
//    Route::get('logout', 'Auth/AuthController@logout');

    Route::get('/', 'ArticleController@index');
    Route::resource('article', 'ArticleController');
});
