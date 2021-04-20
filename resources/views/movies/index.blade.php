@extends('layouts.app')

@section('title', 'Movies')


@section('content')
  <h2>Movies</h2>
  @foreach ($movies as $movie)
    <div>
      <h4><a href="{{ route('movie', ['movie' => $movie->id]) }}">{{$movie->title}}</a></h4>
      <p>{{$movie->storyline}}</p>
    </div>
  @endforeach
@endsection
