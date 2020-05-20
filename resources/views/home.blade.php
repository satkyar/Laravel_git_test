@extends("layout")

@section("Content")	
	<div class="container">	
		<h2>Home page</h2>	
		<a href="\receipe\create" title=""><button class="btn btn-success">Create</button></a>
		@foreach($data as $value)
			<li>Name - <a href="\receipe\{{$value->id}}">{{ $value->name }}</a></li>
			<li>Ingredients - {{ $value->ingredients }}</li>
			<li>Category - {{ $value->category }}</li>
			<hr>		
		@endforeach
	</div>
@endsection