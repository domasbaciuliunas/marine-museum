<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{'/CSS/mystyle.css'}}">
</head>
<body >
    <div class="overlay">
        <div class="container-fluid">
            <div class="text-white">
                <header>
                    <nav class="navbar navbar-expand-sm">
                        <div class="container-fluid">
                            <a class="navbar-brand text-white" href="{{ route('index') }}">Jūrų muziejus</a>
                        </div>
                        @if(Auth::check())
                        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-dark" type="submit">Logout</button>
                        </form>
                    </nav>
                    @endif
                </header>
        @yield('content')
        <footer class="container-fluid mt-5 px-5 text-bg-dark">
            <div class="row">
                <div class="col-sm-4">
                    <ul class="list-unstyled text-small">
                        <li>
                            <h5>Darbas</h5>
                        </li>
                        <li>Jūrų muziejaus bilietų pirkimo programa</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="list-unstyled text-small">
                        <li>
                            <h5>Autorius</h5>
                        </li>
                        <li>Domas Bačiuliūnas</li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
            <script src="{{'JS/script.js'}}"></script>
</body>
</html>

