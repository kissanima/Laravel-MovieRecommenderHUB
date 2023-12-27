<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieRecommendationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'home'])->name('home');;

Route::get('recommender', [MainController::class, 'recommender'])->name('recommender');;

Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signin', [AuthController::class, 'auth_login'])->name('auth_login');
Route::post('home', [AuthController::class, 'auth_signout'])->name('auth_signout');


Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'auth_signup'])->name('auth_signup');

Route::get('/recommendations', [MovieRecommendationController::class, 'getRecommendations']);

