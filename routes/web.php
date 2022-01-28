<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthenticationController;
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
Route::get('/', [ApplicationController::class, 'main']);

Route::get('/tech-section1', function () {
    return view('pages.techSection1');
});

Route::get('/tech-article1', function () {
    return view('pages.techArticle1');
});

Route::get('/development', function () {
    return view('development');
});

Route::get('/development-section1', function () {
    return view('pages.developmentSection1');
});

Route::get('/development-article1', function () {
    return view('pages.developmentArticle1');
});

Route::get('/entertainment', function () {
    return view('entertainment');
});

Route::get('/entertainment-section1', function () {
    return view('pages.entertainmentSection1');
});

Route::get('/entertainment-article1', function () {
    return view('pages.entertainmentArticle1');
});