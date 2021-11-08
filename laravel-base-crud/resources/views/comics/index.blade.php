@extends('layouts.main')

@section('title', 'Index')
    
@section('content')

    <div class="container m-5 d-flex justify-content-evenly">
        @foreach ($comics as $comic)
        <div class="card" style="width: 18rem;">
            <img src="{{$comic->cover_url}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$comic->name}}</h5>
              <h6 class="card-subtitle">Writer:{{$comic->writer}}</h6>
              <h6 class="card-subtitle">Artist:{{$comic->artist}}</h6>
              <p class="card-text">Price:{{$comic->price}} $</p>
            </div>
          </div>
        @endforeach
    </div>
  
@endsection