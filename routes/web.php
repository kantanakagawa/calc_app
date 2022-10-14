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

Route::get('/controller/word/{msg}', [App\Http\Controllers\MessageController::class, 'word']);
Route::get('/calcs/{num1}/{calcu}/{num2}', [App\Http\Controllers\MessageController::class, 'result']);

