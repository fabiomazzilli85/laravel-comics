@extends('style.app')

@section('title', 'Comics')

@section('content')
<div class="container">
    @foreach ($comics as $comic)
        <div class="card mb-5" style="width: 18rem">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $comic['title'] }}</h5>
                <p class="card-text text-center"><strong>Serie</strong>: {{ $comic['series'] }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection