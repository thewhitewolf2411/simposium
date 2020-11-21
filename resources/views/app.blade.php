<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
  <script src="https://source.zoom.us/1.7.9/lib/vendor/jquery.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <title>POC</title>

  <style>
    
    #zmmtg-root{
      background-color:transparent!important;
      position:relative!important;
    }
  </style>
</head>

<body>

  <noscript>
    <strong>We're sorry but poc doesn't work properly without JavaScript enabled. Please enable it to
      continue.</strong>
  </noscript>

  <div id="app" class="container"></div>
  <!-- built files will be auto injected -->
  <script src="{{ mix('vue/vue.js') }}" type="text/javascript"></script>
</body>

