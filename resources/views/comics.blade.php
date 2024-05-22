@extends('style.app')

@section('title', 'Comics')

@section('content')
@foreach ($comics as $comic)
    <div class="container">
        <div class="flex">
            <img src="{{ $comic['thumb'] }}" alt="">
            <div>
                <ul>
                    <li class="text-primary"><strong>Titolo</strong>: {{ $comic['title'] }}</li>
                </ul>
                <ul>
                    <li class="text-success"><strong>Serie</strong>: {{ $comic['series'] }}</li>
                </ul>
            </div>
        </div>
    </div>
@endforeach
@endsection