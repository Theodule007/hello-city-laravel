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

Route::name('root')->get('/', function () {
    return view('welcome');
});
Route::name('home')->get('/home', fn() => view('/pages/home'));


Route::view('/about-us','/pages/about')->name('about');