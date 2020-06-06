@extends("User_View.layout")

@section("content")
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @foreach($receipe as $value)
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">            
            <div class="card-body">
              <h3>{{$value->name}}</h3>
              <p class="card-text">{{ $value->categorys->name }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="detail/{{ $value->id }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>        
        @endforeach
  </div>
  {{ $receipe->links() }}
@endsection