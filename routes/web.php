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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/project', 'PagesController@project');
Route::get('/services', 'PagesController@services');
Route::get('/team', 'PagesController@team');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');
