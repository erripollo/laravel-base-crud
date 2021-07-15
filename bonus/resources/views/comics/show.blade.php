@extends('layout.app')

@section('title', 'Comic')
    
@section('content')
    <div class="container pt-3">
        
        <img src="{{$comic->cover_image}}" alt="">
        <h1 class="display-4 mt-3">{{$comic->title}}</h1>
        <p class="lead">{{$comic->description}}</p>
        
        <div class="d-flex align-items-center">
            <a name="" id="" class="btn btn-primary mr-3" href="{{route('comics.edit', $comic->id)}}" role="button">Edit Comic</a>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button id="btn_delete" type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete the comic?')">Delete</button>
                </form>
        </div>
       
    
    </div>
@endsection