@extends("layout")

@section("content")	
	<div class="container">	
		<h2>Home page</h2>	
		<a href="\receipe\create" title=""><button class="btn btn-success">Create</button></a>
		<br/><br/>
		<?php $i = 1; ?>
		@foreach($data as $value)			
			{{ $i . ". " }} <a href="\receipe\{{$value->id}}">{{ $value->name }}</a>
			<?php $i++ ?>
			<hr>		
		@endforeach
	</div>
@endsection