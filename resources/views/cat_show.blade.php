@extends("layout")

@section("content")
	<div class="container">		
		<h2>{{ $category->name }}</h2>
		<li>Ingredients - {{ $category->desc }}</li>
		<hr>					
		<a href="\category\{{$category->id}}\edit"><button type="submit" class="btn btn-success">Edit</button></a>
	</div>
</br>
	<div class = "container">
		<form method="post" action="\category\{{ $category->id }}">
			{{ method_field("delete") }}
			{{ csrf_field() }}		  
		  <button type="submit" class="btn btn-primary">Delete</button>
		</form>
	</div>
@endsection