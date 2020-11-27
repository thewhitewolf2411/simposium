@extends('layouts.appzoom')

@section('content')

<body>

  <noscript>
    <strong>Žao nam je, ali se ne možete pridružiti webinaru bez dozvole Javascripta. Molimo da omogućite Javascript da se pridružite webinaru.</strong>
  </noscript>

  <div id="app" class="container"></div>
  <!-- built files will be auto injected -->
  <script src="{{ mix('vue/vue.js') }}" type="text/javascript"></script>
</body>


@endsection