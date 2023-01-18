@extends('layouts.main')


@section('title', 'Produtos')


@section('content')





    <h3>Produtos</h3>

    <p>Busca: {{ $search }}</p>

    @if (10 > 11)
        <p>aa</p>
    @elseif (10 == 10)
        <p>Good</p>
    @else
        <p>bb</p>
    @endif

    <p>User: {{$name}} </p>


    @for($i = 0; $i < count($myList); $i++)
        <p>{{$myList[$i]}}</p>
    @endfor

    @foreach($myList as $items)

        <p>{{$items}}</p>

    @endforeach


        @php
            echo "aaaaaaa";
        @endphp

        {{-- aaaa --}}

@endsection
