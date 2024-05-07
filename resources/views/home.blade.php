@extends('layouts.app')

@section('content')

@foreach ($comics as $comic)
<div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
    <div class="card border-0">
        <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
        <div class="card-body">
            {{$comic['title']}}
        </div>
    </div>
    @endforeach
</div>

@endsection