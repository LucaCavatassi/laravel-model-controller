@extends('layouts.app')

@section('content')
<div class="container d-flex flex-wrap gap-3">
    @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <img src={{ $movie->image }} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">Original Title:  {{ $movie->original_title }}</p>
                <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                <p class="card-text">Released: {{ $movie->date }}</p>
                <p class="card-text">Vote: {{ $movie->vote }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection