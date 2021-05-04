<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>REKOG - Regional Cooperative Oncology Group</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Zoom -->

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/images/header/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/images/header/favicon.ico') }}" type="image/x-icon">
    
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <!--<script src="landing_page.js?1620117750841"></script>-->
    <script src="{{ asset('js/landing_page.js') }}"></script>
    <script>
        var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
        function init() {
            canvas = document.getElementById("canvas");
            anim_container = document.getElementById("animation_container");
            dom_overlay_container = document.getElementById("dom_overlay_container");
            var comp=AdobeAn.getComposition("D969E1FBB2FB434A81EACF4C091976D4");
            var lib=comp.getLibrary();
            var loader = new createjs.LoadQueue(false);
            loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
            loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
            var lib=comp.getLibrary();
            loader.loadManifest(lib.properties.manifest);
        }
        function handleFileLoad(evt, comp) {
            var images=comp.getImages();	
            if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }	
        }
        function handleComplete(evt,comp) {
            //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
            var lib=comp.getLibrary();
            var ss=comp.getSpriteSheet();
            var queue = evt.target;
            var ssMetadata = lib.ssMetadata;
            for(i=0; i<ssMetadata.length; i++) {
                ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
            }
            exportRoot = new lib.landing_page();
            stage = new lib.Stage(canvas);	
            //Registers the "tick" event listener.
            fnStartAnimation = function() {
                stage.addChild(exportRoot);
                createjs.Ticker.framerate = lib.properties.fps;
                createjs.Ticker.addEventListener("tick", stage);
            }	    
            //Code to support hidpi screens and responsive scaling.
            AdobeAn.makeResponsive(false,'both',false,1,[canvas,anim_container,dom_overlay_container]);	
            AdobeAn.compositionLoaded(lib.properties.id);
            fnStartAnimation();
        }
    </script>

</head>
<body  onload="myFunction()" @if(Route::is('home')) style="overflow: hidden" @endif>
    <div class="loader-container" id="loader-container">
        <div class="loader" id="loader"></div> 
    </div>
    
    <div id="app" style="display:none;">

        @if(Route::is('home') && Auth::user()->level !== 3)
        <header id="on-hover-header">
            @include('layouts.header')
        </header>
        <main id="dashboard-page" style="overflow: hidden">
            <iframe src="/landing_canvas/landing_page.html" width="100%" height="100%" style="overflow: hidden; height:100%; border:none;" title="Iframe Example"></iframe>
        </main>
        @else
        <header>
            @include('layouts.header')
        </header>
        <main class="py-4" id="auth-page">
            @yield('content')
        </main>
        <footer>
            @include('layouts.footer')
        </footer>
        @endif
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
