<header>
    <section class="">
        <!-- <a class="nav-link" href="">DC POWER VISA</a>
        <a href="">ADDITIONAL SC SITES</a> -> Fare Nav a tendina -->
    </section>

    <div class="d-flex justify-content-center align-items-center g-5">
        <div>
            <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav class="links nav justify-content-center">

            <a class="nav-link {{Route::currentRouteName() === 'home' ? 'nav-active' : ''}}"
                href="{{route('home')}}">CHARACTERS</a>

            <a class="nav-link {{Route::currentRouteName() === 'comics' ? 'nav-active' : ''}}"
                href="{{route('comics')}}">COMICS</a>

            <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'nav-active' : ''}}"
                href="{{route('movies')}}">MOVIES</a>

            <a class="nav-link {{Route::currentRouteName() === 'tv' ? 'nav-active' : ''}}" href="{{route('tv')}}">TV</a>

            <a class="nav-link {{Route::currentRouteName() === 'games' ? 'nav-active' : ''}}"
                href="{{route('games')}}">GAMES</a>

            <a class="nav-link {{Route::currentRouteName() === 'collectibles' ? 'nav-active' : ''}}"
                href="{{route('collectibles')}}">COLLECTIBLES</a>

            <a class="nav-link {{Route::currentRouteName() === 'videos' ? 'nav-active' : ''}}"
                href="{{route('videos')}}">VIDEOS</a>

            <a class="nav-link {{Route::currentRouteName() === 'fans' ? 'nav-active' : ''}}"
                href="{{route('fans')}}">FANS</a>

            <a class="nav-link {{Route::currentRouteName() === 'news' ? 'nav-active' : ''}}"
                href="{{route('news')}}">NEWS</a>

            <a class="nav-link {{Route::currentRouteName() === 'shop' ? 'nav-active' : ''}}"
                href="{{route('shop')}}">SHOP</a> <!-- Fare Nav a tendina -->

            <input type="text" name="" id="" placeholder="Search">
        </nav>
    </div>
</header>