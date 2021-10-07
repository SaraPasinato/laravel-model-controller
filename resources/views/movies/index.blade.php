@extends('layout.main')

@section('title','MyMovies | Movies List')

@section('content')

<section id="books" >
   <div class="container my-5">
    @forelse ($movies as $movie)
        <div class="card" >
            <div class="card-body text-center ">
            <h5 class="card-title text-center">{{$movie['title']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted text-center">{{$movie['original_title']}}</h6>
            <div class="card-text">
                <address>lang: {{$movie['nationality']}}</address>
                <time>Date: {{$movie['date']}}</time>
                <p>Vote: {{$movie['vote']}}</p>
                </div>   
            </div>
        </div>
    @empty
        <h2>Nessun libro disponibile</h2>
    @endforelse
   </div>
</section>


@endsection