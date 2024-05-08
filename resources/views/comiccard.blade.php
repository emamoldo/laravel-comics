@extends('layouts.app')

@section('content')



<div class="container d-flex">

    <div class="container">
        <img src="{{$comiccard['thumb']}}" alt="">
        <h1>
            {{$comiccard['title']}}
        </h1>
    </div>

    <div>
        <div class="advertisemetn">
            <div class="adv-title">ADVERTISEMENT</div>
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="talent">
        <div class="art">
            <p>Art by:
                <a href="">
                    Josè Luis Garcìa-Lòpez, Clay Mann, Ragael Albuquerque, Patrick Gleason, Dan Jurgens, Joe
                    Shuster,
                    Neal
                    Adams, Curt Swan, John Cassaday, Oliver Coipel, Jim Lee
                </a>
            </p>
        </div>

        <div class="written">
            <p>Written by:
                <a href="">
                    Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Micheal Bendis, Paul Dini, Louise
                    Simonson,
                    Richard Donner, Marv Wolfman, Peter J, Tomasi, Dan Jurgens, Jerry Siegel, Paul Levitz
                </a>
            </p>
        </div>
    </div>

    <div class="specs">
        <p>Series:
        <p>{{$comiccard['series']}}</p>
        </p>

        <p>U.S. Price:
        <p>{{$comiccard['price']}}</p>
        </p>

        <p>On Sale Date:
        <p>{{$comiccard['sale_date']}}</p>
        </p>
    </div>

</div>


@endsection