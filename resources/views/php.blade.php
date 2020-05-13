@extends('layout')

@section("title")
	PHP Page
@endsection

@section('Content')
	<h2>PHP Page</h2>
	@foreach($data as $value)
		{{$value}}<br>
	@endforeach
@endsection