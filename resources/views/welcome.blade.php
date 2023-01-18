@extends('layouts/main')

@section('title', 'C Tec')

@section('content')



<br><br><br>

<form action="/" method="GET">
    <input type="text" id="search" name="search" placeholder="search">
</form>


<a href="" class="btn btn-primary">View More</a><br>

@foreach ($events as $event)

    <p>Event: {{ $event->title }}</p><br>
    <p>Desc: {{ $event->description }}</p><br>

@endforeach





@endsection
