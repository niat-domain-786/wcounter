@extends('layouts.dashboard')
@section('content')

	<div class="row">
	<div class="col-lg-12">
	<div class="card">
	<div class="card-body">
	<h4 class="card-title">Input Text Here</h4>
	<div >
	<form action="">

	<textarea 
	cols="30" 
	rows="20" 
	class="form-control" 	
	v-on:keyup="text_length" 
	v-on:click="text_length">
	</textarea>

	</form>
	</div>

	</div>
	</div>
	</div>
	</div>

@endsection