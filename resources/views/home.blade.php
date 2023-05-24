@extends('layouts.app')

@section('content')

<div class="comic-container py-4">
    <div class="container">
        <div class="row row-cols-6 g-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{$movie -> image}}" alt="">
                            <h3 class="card-title">{{$movie -> title}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
