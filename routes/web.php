<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*

 Web Routes

*/

Route::resource('article', ArticleController::class);
Route::post('html-to-text', [ArticleController::class, 'html_to_text']);

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('keyword-density-finder', function () {
    return view('layouts.master');
});

