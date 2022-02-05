<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/signin', [AuthenticationController::class, 'signinView']);
Route::post('/signin', [AuthenticationController::class, 'signin']);
Route::get('/signup', [AuthenticationController::class, 'signupView']);
Route::post('/signup', [AuthenticationController::class, 'signup']);
Route::get('/logout', [AuthenticationController::class, 'logout']);
Route::get('/', [ApplicationController::class, 'newsView']);
Route::get('/opiniones', [ApplicationController::class, 'opinionsView']);
Route::get('/componentes', [ApplicationController::class, 'componentsView']);

Route::get('/posts/{section}/{post}', [ApplicationController::class, 'readPost']);

Route::get('/dashboard/editors', [DashboardController::class, 'editorsView']);
Route::get('/dashboard/readers', [DashboardController::class, 'readersView']);
Route::get('/dashboard/posts', [DashboardController::class, 'postsView']);
Route::get('/dashboard/new-post', [DashboardController::class, 'newPostView']);