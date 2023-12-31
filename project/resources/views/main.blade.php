@extends('layouts.app')

@section('content')

    <div id="main" class="py-5 d-flex flex-wrap justify-content-center gap-5">
        @forelse ($movies as $movie)
            <div class="card">
                <img src="https://picsum.photos/200?random={{$movie->id}}" class="card-img-top" alt="movie-img">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h5 class="card-original-title">ORIGINAL TITLE: {{$movie->original_title}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">NATIONALITY: {{$movie->nationality}}</li>
                    <li class="list-group-item">DATE: {{$movie->date}}</li>
                    <li class="list-group-item">VOTE: {{$movie->vote}}</li>
                </ul>
            </div>
        @empty
            <h3>NO MOVIE NO PARTY</h3>
        @endforelse
    </div>

@endsection
