<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tracks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="/css/welcome.css">
        <script src="{{ asset('animejs/anime.min.js') }}"></script>
        <script src="js/app.js"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}" >Home</a>
                    @else
                        <a href="{{ route('login') }}" class=" primary">
                            <button class="btn btn-danger">Sign In</button>
                        </a>

                          {{--  @if (Route::has('register'))
                          <a href="{{ route('register') }}">Register</a>
                        @endif  --}}
                    @endauth
                </div>
                @endif

    <div id="bg"></div>

    <header>

    </header>

    <main>

        <section id="card">

            <ul>
                <li>
                    <span></span>
                    <strong> Find your fevorite artist by name</strong>
                </li>
                <li>
                    <span></span>
                    <strong>Play the latest song online </strong>
                </li>
                <li>
                    <span></span>
                    <strong> Download fevorite songs </strong>
                </li>
            </ul>
        </section>
        <section id="primary">

            <h1>Welcome to tracks </h1>
            <p> Enrich you life with content from this site.</p>

            <a href="/a/all">Go to our hompage</a>
        </section>
    </main>
    <script>
        anime({
            targets: 'h1',
            keyframes: [
              {translateY: -40},
             { rotateX: 360},
              {translateX: 250},
              {translateY: 40},
              {translateX: 0},
              {translateY: 0}
              ],
              duration: 4000,
              easing: 'easeOutElastic(1, .8)',
              loop: false
            });
        </script>
    </body>
        </html>
