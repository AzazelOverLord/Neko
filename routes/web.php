<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\pagecontroller;
use \App\Http\Controllers\userauthcontroller;
use \App\Http\Controllers\InfoOnDashboardAdmin;
use \App\Http\Controllers\pages\StatusController;
use \App\Http\Middleware\Authenticate;
use App\Http\Middleware;
use App\Http\Middleware\RoleMiddleware;

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

//Route::get('/', [pagecontroller::class, 'index']);



Route::get('/', function () {
    return view('home');
});

Route::get('/adm', 'InfoOnDashboardAdmin@index');


Route::get('/ad', 'StatusController@index')->name('form.add');

Route::get('/kek', function () {
    return view('pages.fadd');
});

Route::get('/status', 'StatusController@index')->name('form.view');

Route::post('/status', 'StatusController@create')->name('form.add');


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/reset', function () {
    return view('auth.passwords.reset');
});

Auth::routes();

