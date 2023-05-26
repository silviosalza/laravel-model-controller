@extends('layouts.app')

@section('content')

<div class="comic-container py-4">
    <div class="container">
        <div class="row row-cols-5 g-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <img src="{{$movie -> image}}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie -> title}}</h5>
                        </div>
                        <h1>branch test</h1>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
