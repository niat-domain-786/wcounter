<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function home(){
    	return view('layouts.master');
    }
    
    public function keywordCalculator(){
    	return view('posts.post1');
    }
}
