@extends('layout.app')

@section('title', 'Comics Page')
    
@section('content')
    <div class="container">
        <div class=" d-flex justify-content-between align-items-center">
            <h1 class="my-3">Comics Page</h1>
            <a name="" id="" class="btn btn-primary m-0" href="{{route('comics.create')}}" role="button">Add New Comic</a>
        </div>

        <div class="cards d-flex justify-content-center flex-wrap">
            @foreach ($comics as $comic)
            <a href="{{route('comics.show', $comic->id)}}">
                <div class="card text-left m-3" style="width: 190px;">
                  <img class="card-img-top" src="{{$comic->cover_image}}" alt="">
                  <div class="card-body">
                    <h4 class="card-title">{{$comic->title}}</h4>
                  </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>
@endsection