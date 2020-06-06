@extends("layout")

@section("content")	
	<?php $i = 1; ?>
	<div class="container">	
		<h2>Home page</h2>	
		@if(session('message'))
		<p class="alert alert-warning alert-dismissible fade show">{{ session('message') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		</p>		
		@endif
		<a href="\receipe\create" title=""><button class="btn btn-success">Create</button></a>
		<br/><br/>		
		@foreach($data as $value)			
			{{ $i . ". " }} <a href="\receipe\{{$value->id}}">{{ $value->name }}</a>
			<?php $i++ ?>
			<hr>		
		@endforeach		
	</div>
	  {{ $data->links() }}
@endsection