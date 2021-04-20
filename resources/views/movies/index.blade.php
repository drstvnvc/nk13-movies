@extends('layouts.app')

@section('title', 'Movies')


@section('content')
<div class="row">
  <div class="col-md-2">
    @include('movies.latest-movies')
  </div>
  <div class="col-md-10">
    <h2>Movies</h2>
    @foreach ($movies as $movie)
      <div>
        <h4><a href="{{ route('movie', ['movie' => $movie->id]) }}">{{$movie->title}}</a></h4>
        <p>{{$movie->storyline}}</p>
      </div>
    @endforeach
  </div>
</div>
@endsection
