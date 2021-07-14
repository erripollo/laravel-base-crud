@extends('layout.app')

@section('title', 'Comic')
    
@section('content')
    <div class="container pt-3">
        
        <img src="{{$comic->cover_image}}" alt="">
        <h1 class=" display-4">{{$comic->title}}</h1>
        <p class="lead">{{$comic->description}}</p>
    
    </div>
@endsection