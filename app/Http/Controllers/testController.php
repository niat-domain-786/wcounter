<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
	   
	function index(){
	  	$options = array(
		  'ignore_errors' => true,
		  'drop_links'=>true
		);
		   	$html = "<div>
		   	<h2>this is heading</h2>
		   	<p>this is a para</p>
		   	<a href='http://foo.com'>A links</a>
		   	</div>";
		$text = \Soundasleep\Html2Text::convert($html, $options);

	   	dd($text);
	   }
}
