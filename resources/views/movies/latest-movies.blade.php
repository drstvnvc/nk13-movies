<div>
  <h4>Latest movies</h4>
  @foreach($latest_movies as $movie)
    <div>
      <a href="{{ route('movie', ['movie' => $movie->id]) }}">{{$movie->title}}</a>
    </div>
  @endforeach
</div>
