<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/39419a7229.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div class="container">
            <div>
                <div class="flex-left">
                    <img class="logo" src="{{asset('img/logo.png')}}" alt='La joie' >    
                    <div class="title m-b-md">
                        La joie
                    </div>
                </div>
                <nav>
                <label for="toggle">☰</label>
                    <input type="checkbox" id="toggle">
                    <div class="links">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('activity') }}">Activités</a>
                        <a href="{{ route('news') }}">Actualités</a>
                        <a href="{{ route('contact') }}">Contact</a>
                    </div>
                        
                    
                </nav>
            </div>

            <main role="main" class="main">
                @yield('content')
            </main>

            <footer>
                <p>
                    &copy Copyright {{ date('Y')}}
                    @if(! Route::is('home'))
                    &middot <a href="{{ route('home')}}" >About us </a>
                   @endif
                </p>
            </footer>
        </div>
    </body>
</html>