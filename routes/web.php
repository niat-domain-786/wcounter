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

Route::get('open-graph-generator', function () {
        return view('layouts.master');        
});

Route::get('twitter-card-generator', function () {
    return view('layouts.master');
});

Route::get('schema-generator', function () {
    return view('layouts.master');
});

Route::get('meta-tags-generator', function () {
    return view('layouts.master');
});

Route::get('write-seo-optimized-article', function () {
    return view('layouts.write-article-master');
});

Route::get('site-seo-checker', function () {
    return view('layouts.master');
});
Route::get('site-scan', function () {
    return view('layouts.site-scan');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('curl', function(){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://infopediya.com");
	curl_setopt($ch, CURLOPT_POST, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
	dump($result);
});
