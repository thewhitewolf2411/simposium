<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vue/vue.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body  onload="myFunction()">
    <div class="loader-container" id="loader-container">
        <div class="loader" id="loader"></div> 
    </div>
    
    <div id="app" style="display:none;">
        <header>
            @include('layouts.header')
        </header>

        <main class="py-4" id="auth-page">
        <script src="https://source.zoom.us/1.7.5/lib/vendor/jquery.min.js"></script>
            @yield('content')
        </main>

        <footer>
            @include('layouts.footer')
        </footer>
        
    </div>

    <script>
        function myFunction() {
            setTimeout(function(){
                document.getElementById("loader").style.display = "none";
                document.getElementById("loader").style.height = "0";
                document.getElementById("loader-container").style.height = "0";
                document.getElementById("app").style.display = "block";
            }, 300);
        }

    </script>

</body>
</html>
