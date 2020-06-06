@extends("layout")

@section("content")	
	<div class="container">			
		<h2>Edit Receipe</h2>
		@if(session('message'))
		<p class="alert alert-warning alert-dismissible fade show">{{ session('message') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		</p>		
		@endif
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form method="post" action="\category\{{ $category->id }}">
			{{ method_field("put") }}
			{{ csrf_field() }}
		  <div class="form-group col-md-3">
		    <label>Category Name</label>
		    <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>	    
		  </div>
		  <div class="form-group col-md-3">
		    <label>Description</label>
		    <input type="text" class="form-control" name="desc" value="{{ $category->desc }}" required>
		  </div>		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection