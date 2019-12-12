<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title', 'Tracks')</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('anime/anime.min.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white  shadow-sm ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Tracks
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link white" href="{{ route('login') }}">
                                    <button class=" btn btn-danger"> Login</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link white" href="/contact">
                                    <button class=" btn  btn-success"> contact</button>
                                    </a>
                            </li>
                            @if (Route::has('register'))
                                {{--  <li class="nav-item">
                                    <a class="nav-link white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>  --}}
                                @endif
                        @else
                        <ul class=" nav text">
                            <li class=" nav-item">
                                <a href=" /home" class=" nav-link">
                                 <button  class="btn   bg-dark white  btn-outline-info capitalise">Home</button>
                                </a>
                            </li>
                            <li class=" nav-item">
                                <a href=" /a/all" class=" nav-link">
                                 <button  class="btn  bg-dark white  btn-outline-info capitalise">Altist home</button>
                                </a>
                            </li>
                            <li class=" nav-item">
                                <a href="/a/create" class=" nav-link">
                                 <button class="btn bg-dark white  btn-outline-info capitalise"> Create Artist</button>
                                </a>
                            </li>

                           <li class=" nav-item">
                               <a href="/songs/create" class=" nav-link">
                                 <button class="btn bg-dark white  btn-outline-info capitalise"> Create Song</button>
                                </a>
                            </li>


                            @can('admin-only', Auth::user())

                            <li class=" nav-item">
                                <a href="/A" class=" nav-link">
                                    <button class="btn  bg-dark white  btn-outline-info capitalise"> Admin</button>
                                </a>
                            </li>
                            @endcan

                           <li class=" nav-item">
                               <a href="/contact" class=" nav-link">
                                 <button class="btn bg-dark white   btn-outline-info capitalise "> contact</button>
                                </a>
                            </li>
                        </ul>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            @include('footer')
        </main>
        div
    </div>
</body>
</html>
