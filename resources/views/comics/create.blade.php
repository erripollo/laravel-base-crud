@extends('layout.app')

@section('title', 'Add new comic')
    
@section('content')
    <div class="container">
        <h1>Add New Comic</h1>

        <form action="{{route('comics.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" placeholder="Comic title" aria-describedby="titleHelper">
              <small id="titleHelper" class="text-muted">Add comic title</small>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" id="description" rows="4" placeholder="Comic description"></textarea>
            </div>
              <div class="form-group">
                <label for="cover_image">Cover Image URL</label>
                <input type="url" name="cover_image" id="cover_image" class="form-control" placeholder="Comic title" aria-describedby="coverImageHelper">
                <small id="coverImageHelper" class="text-muted">Type the url for a cover image</small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection