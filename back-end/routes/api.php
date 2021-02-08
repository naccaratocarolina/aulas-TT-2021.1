<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\BookController;

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
Route::post('register', [PassportController::class, 'register']);
Route::post('login', [PassportController::class, 'login']);

// User Controller
Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'create']);

Route::group(['middleware' => 'auth:api'], function() {
    // Passport Controller
    Route::get('logout', [PassportController::class, 'logout']);
    Route::get('getDetails', [PassportController::class, 'getDetails']);
    
    // User Controller
    Route::put('users/{id}', [UserController::class, 'update']);
    Route::delete('users/{id}', [UsersController::class, 'destroy']);

    // Book Controller
    Route::get('books', [BookController::class, 'index']);
    Route::get('books/{id}', [BookController::class, 'show']);
    Route::post('books', [BookController::class, 'create']);
    Route::put('books/{id}', [BookController::class, 'update']);
    Route::delete('books/{id}', [BookController::class, 'destroy']);
});
