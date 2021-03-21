<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*

 Web Routes

*/

Route::resource('article', ArticleController::class);
Route::post('html-to-text', [ArticleController::class, 'html_to_text']);

Route::get('/', fn () => view('layouts.master'));
// Route::get('keyword-density-finder', fn () => view('layouts.master'));


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
