<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pokemon') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ URL::asset('css/pokedex.css') }}" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/7dddae9ad9.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>

</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg transparent">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><img id="logo" src="{{ asset('img\International_Pokémon_logo.svg.png') }}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end ms-1" id="navbarNav">
    @if (Route::has('login'))
      <ul class="navbar-nav">
        @auth
            <li class="nav-item">
                <a class="nav-link active ms-1 text-light" href="{{ url('/logout') }}">Logout</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link active ms-1  text-light" href="{{ route('login') }}">Login</a>
            </li>
            @if (Route::has('register'))
                <a class="nav-link active ms-1 text-light" href="{{ route('register') }}">Register</a>
            @endif
        @endauth

      </ul>
    @endif
    </div>
    </div>
</nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
