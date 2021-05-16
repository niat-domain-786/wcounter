<?php

use Illuminate\Support\Facades\Route;


Route::post('uploadpdf', 'fileController@uploadpdf')->name('uploadpdf');
Route::get('pdf-to-text-converter', 'fileController@pdfhome')->name('pdfhome');;
Route::get('getTxt', 'fileController@read');


// Route::get('star', function(){
//     return view('layouts.templates.tools');
// });

// Route::get('insert', function(){
//     $b = new App\Blog();

//     $b->type= 0;
//     $b->slug= 'post3';
//     $b->title='the title post 3'; 
//     $b->excerpt='the excerpt 3'; 
//     $b->tags='all tags 3'; 
//     $b->featured_image_url='google.com'; 
//     $b->focus_keyword='the keyword here';
//     $b->body='finally body here';
//     $b->save();
//     return true;



//     return view('layouts.templates.blog');
// });

// Route::get('single', function(){
//     return view('layouts.templates.single');
// });

// laravel ui routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//posts and pages
Route::get('/', 'BlogController@index');
Route::get('/blog', 'BlogController@blog');
// Route::get('keyword-density-calculator-tool', 'postController@keywordCalculator');
// Route::get('privacy', 'pageController@privacy');
// Route::get('about', 'pageController@about');
// Route::get('disclaimer', 'pageController@disclaimer');

//admin posts and pages
Route::post('submit', 'BlogController@store')->middleware('auth');
Route::get('admin-posts', 'BlogController@adminPostsList')->middleware('auth');
Route::get('edit/{slug}', 'BlogController@adminEdit')->middleware('auth');
Route::patch('update', 'BlogController@adminUpdate')->middleware('auth');
Route::delete('delete', 'BlogController@adminDelete')->middleware('auth');

Route::get('/{slug}', 'BlogController@show');


