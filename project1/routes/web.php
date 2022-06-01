<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\FormregController;



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
    return view('register');
});
Route::get('/', function () {
    return view('contact');
});
Route::get('/', function () {
    return view('aboutUS');
});
Route::get('/register_user', [FormregController::class, 'get_data']);
Route::get('/register_id', [FormregController::class, 'get_id']);
