@extends('style.app')

@section('title', 'Comics')

@section('content')
@foreach ($comics as $comic)
    <img src="{{ $comic['thumb'] }}" alt="">
    <ul>
        <li>{{ $comic['title'] }}</li>
    </ul>
    <ul>
        <li>{{ $comic['series'] }}</li>
    </ul>
@endforeach
@endsection