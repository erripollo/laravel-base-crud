@extends('layout.app')

@section('title', 'Edit comic')
    
@section('content')
    <div class="container">
        <h1>Edit Comic</h1>

        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" placeholder="Comic title" aria-describedby="titleHelper" value="{{$comic->title}}">
              <small id="titleHelper" class="text-muted">Add comic title</small>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" id="description" rows="4" placeholder="Comic description">{{$comic->description}}</textarea>
            </div>
            <div class="form-group">
              <h4>Current cover image</h4>
              <img src="{{$comic->cover_image}}" alt="">
            </div>
              <div class="form-group">
                <label for="cover_image">Change Cover Image URL</label>
                <input type="url" name="cover_image" id="cover_image" class="form-control" placeholder="Comic title" aria-describedby="coverImageHelper" value="{{$comic->cover_image}}">
                <small id="coverImageHelper" class="text-muted">Type the url for a cover image</small>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
@endsection