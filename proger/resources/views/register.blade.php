@extends('layout')

@section('title')Новое @endsection

@section('main_content')
    <h1 class="news">Новое</h1>
    <h1>Все отзывы</h1>
    @foreach($register as $el)
        <div class="alert alert-warning">
            <h3>{{ $el->subject }}</h3>
            <b>{{$el->email}}</b>
            <p>{{$el->message}}</p>
            <a href="{{ route('register_one', $el->id) }}"><button class="btn btn-warning">Детальнее</button></a>

        </div>

    @endforeach
@endsection
