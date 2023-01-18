@extends('layouts/main')

@section('title', 'C Tec')

@section('content')



<br><br><br>

@foreach ($events as $event)

    <p>Event: {{ $event->title }}</p><br>
    <p>Desc: {{ $event->description }}</p><br>

@endforeach





@endsection
