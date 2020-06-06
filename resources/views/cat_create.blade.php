@extends("layout")

@section("content")	
	<div class="container">			
		<h2>New Category</h2>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form method="post" action="\category">
			{{ csrf_field() }}
		  <div class="form-group col-md-3">
		    <label>Category Name</label>
		    <input type="text" class="form-control" name="name" value="{{ old('name' )}}" required>	    
		  </div>
		  <div class="form-group col-md-3">
		    <label>Description</label>
		    <input type="text" class="form-control" name="desc" value="{{ old('ingredients' )}}" required>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection