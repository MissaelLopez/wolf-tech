<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [ApplicationController::class, 'allPosts']);

Route::get('/api/noticias', [ApplicationController::class, 'noticias']);
Route::get('/api/opiniones', [ApplicationController::class, 'opiniones']);
Route::get('/api/componentes', [ApplicationController::class, 'componentes']);

Route::get('/api/{section}/{post}', [ApplicationController::class, 'getPost']);

Route::group(['middleware' => ['auth']], function()
{
  Route::get('/dashboard/editors', [DashboardController::class, 'editorsView']);
  Route::post('/save-editor', [DashboardController::class, 'saveEditor']);
  Route::get('/delete-editor/{id}', [DashboardController::class, 'deleteEditor']);

  Route::get('/dashboard/readers', [DashboardController::class, 'readersView']);
  Route::get('/delete-reader/{id}', [DashboardController::class, 'deleteReader']);

  Route::get('/dashboard/posts', [DashboardController::class, 'postsView']);
  Route::post('/savePost', [DashboardController::class, 'savePost']);
  Route::get('/edit-post/{id}', [DashboardController::class, 'editPostView']);
  Route::post('/edit-post/{id}', [DashboardController::class, 'editPost']);
  Route::get('/delete-post/{id}', [DashboardController::class, 'deletePost']);

  Route::get('/dashboard/new-post', [DashboardController::class, 'newPostView']);
});
Route::get('/logout', [AuthenticationController::class, 'logout']);