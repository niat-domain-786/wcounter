<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;
use Illuminate\Support\Facades\Storage;

class fileController extends Controller
{



	public function load(){
	return redirect()->route('pdfhome');

	}

	public function pdfhome(){
	return view('layouts.pdfcounter');

	}

	public function uploadpdf(Request $request){

		   if ($request->hasFile('image')) {

            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filextension = $file->getClientOriginalExtension();

	            if ($filextension  == 'pdf') {

	            // $path = $file->storeAs('app/public', $filename);
				// $path = 'c:/Program Files/Git/mingw64/bin/pdftotext';
				// $txt = Pdf::getText($file, $path);
				$txt = Pdf::getText($file);
			    return response($txt, 200)->header('Content-Type', 'text/plain');

	            }else{
	            	return response('Something went wrong. Please Try again!', 403)->header('Content-Type', 'text/plain');
	            }	    
        }

        else{

		    return '';
            
        }

	}

    public function read(){

	$path = 'c:/Program Files/Git/mingw64/bin/pdftotext';
	// echo "<pre>";
	$txt = Pdf::getText('pythonlearn.pdf', $path);
	// $words =  str_word_count($txt);
	// $arr = array('txt'=>$txt, 'words'=>$words);
	// $txt = Pdf::getText('doc.docx', $path);
	// echo "$txt";

		// dd(str_word_count(htmlspecialchars($txt)));
	// return response()->json(['txt'=> $txt]);
	// return response()->json([
	//     'txt' => $txt,
	//     'state' => 'CA',
	// ]);
	// $data = mb_convert_encoding($arr, "UTF-8", "auto");
	// return response()->json($data);

    return response($txt, 200)->header('Content-Type', 'text/plain');


    }
}
