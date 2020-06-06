@extends("layout")

@section("content")
	<div class="container">		
		<h2>{{ $receipe->name }}</h2>
		<li>Ingredients - {{ $receipe->ingredients }}</li>
		<li>Category - {{ $receipe->categorys->name }}</li>
		<hr>					
		<a href="\receipe\{{$receipe->id}}\edit"><button type="submit" class="btn btn-success">Edit</button></a>
	</div>
</br>
	<div class = "container">
		<form method="post" action="\receipe\{{ $receipe->id }}">
			{{ method_field("delete") }}
			{{ csrf_field() }}		  
		  <button type="submit" class="btn btn-primary">Delete</button>
		</form>
	</div>
@endsection