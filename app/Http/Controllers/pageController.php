<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function privacy(){
    	return view('pages.privacy');
    }

    public function disclaimer(){
    	return view('pages.disclaimer');
    }
    
    public function about(){
    	return view('pages.about');
    }
}
