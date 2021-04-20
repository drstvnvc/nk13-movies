@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h2>{{$movie->title}} ({{$movie->release_year}})</h2>
<h5>{{$movie->director}}</h5>
<span>{{$movie->genre}}</span>
<hr/>
<p>{{$movie->storyline}}</p>
@endsection
