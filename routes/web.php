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

Route::get('/welcome', fn () => view('welcome'));

Route::get('/', fn () => view('layouts.master'));
Route::get('/keyword–density–calculator–tool', fn () => view('posts.post1'));

Route::get('privacy–policy', fn () => view('pages.privacy'));
Route::get('about–us', fn () => view('pages.about'));
Route::get('disclaimer', fn () => view('pages.disclaimer'));