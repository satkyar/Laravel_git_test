@extends("layout")

@section("content")	
	<div class="container">			
		<h2>New Receipe</h2>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form method="post" action="\receipe">
			{{ csrf_field() }}
		  <div class="form-group">
		    <label>Receipe Name</label>
		    <input type="text" class="form-control" name="name" value="{{ old('name' )}}" required>	    
		  </div>
		  <div class="form-group">
		    <label>Ingredients</label>
		    <input type="text" class="form-control" name="ingredients" value="{{ old('ingredients' )}}" required>
		  </div>
		   <div class="form-group">
		   	<label>Category</label>
		    <select class="form-control" name="category">
		    	@foreach($category as $value)
		    		<option value="{{$value->id}}">{{ $value->name }}</option>
		    	@endforeach
		    </select>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection