@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h2>{{$movie->title}} ({{$movie->release_year}})</h2>
<h5>{{$movie->director}}</h5>
<span>{{$movie->genre}}</span>
<hr/>
<p>{{$movie->storyline}}</p>
<br/>
<h5>Comments</h5>
<div>
  @forelse($movie->comments as $comment)
    <div>
      <div>{{$comment->content}}</div>
      <small>{{$comment->created_at}}</small>
    </div>
  @empty
    <span>No comments</span>
  @endforelse
</div>

<form action="{{route('createComment', ['movie' => $movie])}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="body">Add comment:</label>
    <textarea
      class="form-control @error('content') is-invalid @enderror"
      id="content"
      rows="2"
      name="content"
    ></textarea>
    @error('content')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
