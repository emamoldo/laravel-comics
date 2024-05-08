@extends('layouts.app')

@section('content')

<div class="container">
    <div class="series">
        <p>CURRENT SERIES</p>
    </div>
</div>

<div class="container d-flex flex-column align-items-center">
    <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
        <!-- Cicle foreach for the images and the title of the comics -->
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card border-0">
                    <img class="cards card-img-top" src="{{$comic['thumb']}}" alt="">
                </div>
                <div class="card-body">
                    {{$comic['title']}}
                </div>
            </div>
        @endforeach
    </div>
    <!-- the "LOAD MORE" button -->
    <button class="btn btn-primary" type="button">LOAD MORE</button>
</div>


<div class="buy d-flex align-items-center justify-content-around">
    <div>
        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
        <a href="">DIGITAL COMICS</a>
    </div>

    <div>
        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
        <a href="">DC MERCHANDISE</a>
    </div>

    <div>
        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
        <a href="">SUBSCRIPTION</a>
    </div>

    <div>
        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
        <a href="">COMIC SHOP LOCATOR</a>
    </div>

    <div>
        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
        <a href="">DC POWER VISA</a>
    </div>
</div>
@endsection