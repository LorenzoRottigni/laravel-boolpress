<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>



        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex flex-column full-height">
            <header class="py-5 px-3">
                <nav class="d-flex justify-content-between">
                    <img src="https://fontmeme.com/permalink/220117/5ba96e9b8ce780ed5447fcd83b0ae998.png" alt="battlefield-2042-font" border="0">
                    <div class="d-flex align-items-center">
                        <ul class="list-unstyled mb-0 d-flex justify-content-center text-dark">
                            <li class="mx-3">Home</li>
                            <li class="mx-3">Home</li>
                            <li class="mx-3">Home</li>
                            <li class="mx-3">Home</li>
                            <li class="mx-3">Home</li>
                        </ul>
                        <a href="{{ route('login') }}">
                            <button class="btn bg-pink">
                                Login
                            </button>
                        </a>
                    </div>
                </nav>
            </header>
            <main class="flex-grow-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-container-pink rounded">
                                <h1> @yield('title')</h1>
                            </div>
                            <div class="d-flex h-100 align-items-center">
                                @yield('main')
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-3">
                <h5 class="mb-0 text-center text-white">Designed with &hearts; by Lorenzo Rottigni</h5>
            </footer>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
