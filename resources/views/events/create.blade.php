@extends('layouts.main')


@section('title', 'Create')


@section('content')


<h1> Criar </h1>


    <div id="event-create-container" class="col-md-6 offset-md-3">

        <form action="/events" method="POST">
            @csrf
            @method('POST')
            <input type="text" class="form-control" name="title" placeholder="Evento">
            <input type="text" class="form-control" name="city" placeholder="cidade">
            <br><br>
            <select name="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
            <br><br>
            <input type="text" class="form-control" name="description" placeholder="Desc">
            <input type="submit" class="btn btn-primary" value="Send">

        </form>

    </div>

@endsection


