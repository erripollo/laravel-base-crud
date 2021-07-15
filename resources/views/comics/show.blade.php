@extends('layout.app')

@section('title', 'Comic')
    
@section('content')
    <div class="container pt-3">
        
        <img src="{{$comic->cover_image}}" alt="">
        <div class="d-flex align-items-center">
            <h1 class="display-4 mr-3">{{$comic->title}}</h1>
            <a name="" id="" class="btn btn-primary" href="{{route('comics.edit', $comic->id)}}" role="button">Edit Comic</a>
        </div>
        <p class="lead">{{$comic->description}}</p>

    
    </div>
@endsection