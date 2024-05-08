@extends('layouts.app')

@section('content')


<div class="container">
    <img src="{{$comiccard['thumb']}}" alt="">
    <h1>
        {{$comiccard['title']}}
    </h1>
</div>


@endsection