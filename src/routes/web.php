<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index']);
//Route::resource('question','QuestionController');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login']);
    Route::post('/register', [App\Http\Controllers\Auth\AuthController::class, 'register']);
    Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\Auth\AuthController::class, 'refresh']);
    Route::get('/user-profile', [App\Http\Controllers\Auth\AuthController::class, 'userProfile']);
});
