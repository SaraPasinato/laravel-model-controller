@extends('layout.main')

@section('title','MyMovies | Movies List')

@section('content')

<section id="books" class="text-center ">
   <div class="container my-5">
    @forelse ($movies as $movie)
        <div class="card" >
            <div class="card-body">
            <h5 class="card-title">{{$movie['title']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$movie['original_title']}}</h6>
            <div class="card-text">
                <address>{{$movie['nationality']}}</address>
                <time>{{$movie['date']}}</time>
                <small>{{$movie['vote']}}</small>
                </div>   
            </div>
        </div>
    @empty
        <h2>Nessun libro disponibile</h2>
    @endforelse
   </div>
</section>


@endsection