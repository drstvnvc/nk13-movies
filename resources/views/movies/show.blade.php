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
@endsection
