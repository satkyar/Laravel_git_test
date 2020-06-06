@extends("User_View.layout")
    
@section("content")
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-12 shadow-sm">            
            <div class="card-body">
              <h3>{{ $receipe->name }}</h3>
              <p class="card-text">{{ $receipe->ingredients }}</p>
              <p>{{ $receipe->categorys->name }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/"><button type="button" class="btn btn-sm btn-outline-secondary">Back</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
@endsection
