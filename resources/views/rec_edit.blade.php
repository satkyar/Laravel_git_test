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
		<form method="post" action="\receipe\{{ $receipe->id }}">
			{{ method_field("put") }}
			{{ csrf_field() }}
		  <div class="form-group col-md-3">
		    <label>Receipe Name</label>
		    <input type="text" class="form-control" name="name" value="{{ $receipe->name }}" required>	    
		  </div>
		  <div class="form-group col-md-3">
		    <label>Ingredients</label>
		    <input type="text" class="form-control" name="ingredients" value="{{ $receipe->ingredients }}" required>
		  </div>
		  <div class="form-group col-md-3">
		   	<label>Category</label>		   
		    <select class="form-control" name="category">
		    	@foreach($category as $value)
		    		<option value="{{$value->id}}" 
		    			{{$receipe->categorys->id==$value->id ? "selected":""}}>{{ $value->name }}</option>
		    	@endforeach
		    </select>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection