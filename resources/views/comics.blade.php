@extends('style.app')

@section('title', 'Comics')

@section('content')
@foreach ($comics as $comic)
    <div>
        <img src="{{ $comic['thumb'] }}" alt="">
        <ul>
            <li><strong>Titolo</strong>: {{ $comic['title'] }}</li>
        </ul>
        <ul>
            <li><strong>Serie</strong>: {{ $comic['series'] }}</li>
        </ul>
    </div>
@endforeach
@endsection
