@extends('layout')

@section('title')$data->subject @endsection

@section('main_content')
    <h1 class="news">Новое</h1>
    <h1>$data->subject</h1>
        <div class="alert alert-warning">

            <b>{{$el->email}}</b>
            <p>{{$el->message}}</p>
            <a href="{{ route('register_one', $el->id) }}"><button class="btn btn-warning">Детальнее</button></a>

        </div>


@endsection
