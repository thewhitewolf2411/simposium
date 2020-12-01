


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.8.1/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.8.1/css/react-select.css" />
</head>
<body  onload="myFunction()">
    <div class="loader-container" id="loader-container">
        <div class="loader" id="loader"></div> 
    </div>
    
    <div id="main">
        <header>
            @include('layouts.header')
        </header>

        <main class="py-4">
          <!-- import ZoomMtg dependencies -->
          <div class="iframe-container" style="overflow: hidden; padding-top: 56.25%; position: relative;">
              <iframe allow="microphone; camera" style="border: 0; height: 100%; left: 0; position: absolute; top: 0; width: 100%;" src="https://zoom.us/webinar/register/WN_AcCMU8XgSkq_L19zD-VpHw/" frameborder="0"></iframe>
          </div>

        </main>


        
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
