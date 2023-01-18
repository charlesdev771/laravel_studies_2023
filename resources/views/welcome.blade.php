@extends('layouts/main')

@section('title', 'C Tec')

@section('content')


@foreach ($events as $event)

    <p>Event: {{ $event->title }}</p>
    <p>Desc: {{ $event->description }}</p>

@endforeach





@endsection
