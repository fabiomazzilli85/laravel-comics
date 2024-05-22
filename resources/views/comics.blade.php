@extends('style.app')

@section('title', 'Comics')

@foreach ($comics as $comic)
    <img src="{{ $comic['thumb'] }}" alt="">
    <li>{{ $comic['title'] }}</li>
    <li>{{ $comic['series'] }}</li>
@endforeach