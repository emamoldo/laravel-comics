<!-- @extends('layouts.app') -->

@section('content')
<div class="container">
    <div>
        <div class="comics-info">
            <h2>{{$comic['title']}}</h2>
            <div class="price-section"></div>
            <div class="decription"></div>
        </div>

        <div class="advertisemetn">
            <div class="adv-title"></div>
            <img src="" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="talent">
        <div class="art">
            <p>Art by:</p>
            <a href="">
                Josè Luis Garcìa-Lòpez, Clay Mann, Ragael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal
                Adams, Curt Swan, John Cassaday, Oliver Coipel, Jim Lee
            </a>
        </div>

        <div class="written">
            <p>Written by:</p>
            <a href="">
                Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Micheal Bendis, Paul Dini, Louise Simonson,
                Richard Donner, Marv Wolfman, Peter J, Tomasi, Dan Jurgens, Jerry Siegel, Paul Levitz
            </a>
        </div>
    </div>

    <div class="specs">
        <p>Series:</p>
        <p>{{$comic['series']}}</p>
        <p>U.S. Price:</p>
        <p>{{$comic['price']}}</p>
        <p>On Sale Date:</p>
        <p>{{$comic['sale_date']}}</p>
    </div>

</div>
@endsection