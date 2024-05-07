<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


### Ex Descriprion: 

Create un nuovo progetto Laravel.
Concentratevi sul layout: 
- Create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...)
- Eventualmente includendo header e footer tramite due partials.

- Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.

Bonus:
- Create più pagine che estendono lo stesso layout


    ## For the link in the pages:
            <a class="nav-link {{Route::currentRouteName() === 'characters' ? 'nav-active' : ''}}" href="{{route('characters')}}">CHARACTERS</a>
            <a class="nav-link {{Route::currentRouteName() === 'comics' ? 'nav-active' : ''}}" href="{{route('comics')}}">COMICS</a>
            <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'nav-active' : ''}}" href="{{route('movies')}}">MOVIES</a>
            <a class="nav-link {{Route::currentRouteName() === 'tv' ? 'nav-active' :''}}" href="{{route('tv')}}">TV</a>
            <a class="nav-link {{Route::currentRouteName() === 'games' ? 'nav-active' :''}}" href="{{route('games')}}">GAMES</a>
            <a class="nav-link {{Route::currentRouteName() === 'collectibles' ? 'nav-active' :''}}" href="{{route('collectibles')}}">COLLECTIBLES</a>
            <a class="nav-link {{Route::currentRouteName() === 'videos' ? 'nav-active' :''}}" href="{{route('videos')}}">VIDEOS</a>
            <a class="nav-link {{Route::currentRouteName() === 'fans' ? 'nav-active' :''}}" href="{{route('fans')}}">FANS</a>
            <a class="nav-link {{Route::currentRouteName() === 'news' ? 'nav-active' :''}}" href="{{route('news')}}">NEWS</a>
            <a class="nav-link {{Route::currentRouteName() === 'shop' ? 'nav-active' :''}}" href="{{route('shop')}}">SHOP</a> <!-- Fare Nav a tendina -->



    <div class="container">
        @foreach ($comics as $comic)
        <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
            <div class="card border-0">
                <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
                <div class="card-body">
                    {{$comic['title']}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>