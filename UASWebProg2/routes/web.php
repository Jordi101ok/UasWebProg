<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\homeController;

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

Route::get('/', [pageController::CLASS, 'homePage']);
Route::get('/homePage', [pageController::CLASS, 'homePage']);
Route::get('/login', [pageController::CLASS, 'login']);
Route::get('/signUp', [pageController::CLASS, 'signUp']);
Route::get('/aboutUs', [pageController::CLASS, 'aboutUs']);
Route::get('/insertUser', [homeController::CLASS, 'testInsert']);