@extends('layout')



@section('Content')
	<h2>JS Page</h2>
	@foreach($data as $value)
		{{$value}}<br>
	@endforeach
@endsection