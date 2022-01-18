<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex flex-column full-height">
            <header class="py-5 px-3">
                <nav class="d-flex justify-content-between align-">
                    <img src="https://fontmeme.com/permalink/220117/5ba96e9b8ce780ed5447fcd83b0ae998.png" alt="battlefield-2042-font" border="0">
                    <div class="d-flex align-items-center">
                        <ul class="list-unstyled mb-0 d-flex justify-content-center text-dark">
                            <li class="mx-3">Home</li>
                            <li class="mx-3">Home</li>
                            <li class="mx-3">Home</li>
                            <li class="mx-3">Home</li>
                            <li class="mx-3">Home</li>
                        </ul>
                        <form action="{{route('logout')}}" method="post">
                            <button class="btn bg-pink">
                                Logout
                            </button>
                        </form>

                    </div>
                </nav>
            </header>
            <main class="flex-grow-1">
                <div class="container-fluid h-100">
                    <div class="row h-100">
                        <div class="col-5 bg-pink h-95">
                            <h1 class="text-white text-center mt-5">Welcome User!</h1>
                            <h3 class="text-white text-center mt-5">This is your private dashboard</h3>
                            <ul class="list-unstyled mb-0 mt-5 text-center">
                                <li><h4><a href="{{route('admin.home')}}" class="text-white">Home</a></h4></li>
                                <li><h4><a href="{{route('admin.users.index')}}" class="text-white">Show users</a></h4></li>
                            </ul>
                        </div>
                        <div class="col-7">
                            <div class="title-container rounded">
                                <h1> @yield('title')</h1>
                            </div>
                            @yield('main')
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-3">
                <h5 class="mb-0 text-center text-white">Designed with &hearts; by Lorenzo Rottigni</h5>
            </footer>
        </div>
    </body>
</html>
