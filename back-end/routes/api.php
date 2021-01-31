<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Passport Controller
Route::post('register', 'PassportController@register');
Route::post('login', 'PassportController@login');

// User Controller
Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');
Route::post('users', 'UserController@create');

Route::group(['middleware' => 'auth:api'], function() {
    // Passport Controller
    Route::get('logout', 'PassportController@logout');
    Route::get('getDetails', 'PassportController@getDetails');
    
    // User Controller
    Route::put('users/{id}', 'UserController@update');
    Route::delete('users/{id}', 'UsersController@destroy');

    // Book Controller
    Route::get('books', 'BookController@index');
    Route::get('books/{id}', 'BookController@show');
    Route::post('books', 'BookController@create');
    Route::put('books/{id}', 'BookController@update');
    Route::delete('books/{id}', 'BookController@destroy');
});
