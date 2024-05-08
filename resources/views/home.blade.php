@extends('layouts.app')

@section('content')

@foreach ($comics as $index => $comic)
    <div class="col">
        <a href="{{route('comiccard', ['id' => $index])}}">
            <div class="card border-0">
                <img class="card card-img-top" src="{{$comic['thumb']}}" alt="">
            </div>
            <div class="card-body">
                {{$comic['title']}}
            </div>
        </a>
    </div>
@endforeach

@endsection