@extends('layouts.app')
@section('title', 'Add a movie')

@section('content')
<form action="/movies" method="POST">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input
      type="text"
      class="form-control @error('title') is-invalid @enderror"
      id="title"
      aria-describedby="titleHelp"
      placeholder="Enter title"
      name="title">
    @error('title')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="title">Director</label>
    <input
      type="text"
      class="form-control @error('director') is-invalid @enderror"
      id="director"
      aria-describedby="titleHelp"
      placeholder="Enter director"
      name="director">
    @error('director')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="title">Genre</label>
    <input
      type="text"
      class="form-control @error('genre') is-invalid @enderror"
      id="genre"
      aria-describedby="titleHelp"
      placeholder="Enter genre"
      name="genre">
    @error('genre')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="title">Release year</label>
    <input
      type="text"
      class="form-control @error('release_year') is-invalid @enderror"
      id="release_year"
      aria-describedby="titleHelp"
      placeholder="Enter release year"
      name="release_year">
    @error('release_year')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="body">Storyline</label>
    <textarea
      class="form-control @error('storyline') is-invalid @enderror"
      id="storyline"
      rows="3"
      name="storyline"
    ></textarea>
    @error('storyline')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
