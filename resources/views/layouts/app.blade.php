<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Andavar College of Nursing </title>


      <link rel="stylesheet" type="text/css" href="{{ asset("/css/bootstrap.min.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/animate.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/font-awesome.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/flaticon.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/themify-icons.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/slick.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/prettyPhoto.css") }}" media="all/">
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/shortcodes.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/main.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/megamenu.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/responsive.css") }}" media="all"/>


      <style>
        .ttm-service-description > h3 {
            background-image: linear-gradient(120deg, #f857a6 10%, #ef3f6e 100%);
            -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
        }
      </style>

   </head>
   <body>

    <div class="page">


        <x-navbar-component/>

        @yield('content')

        <x-footer/>

    </div>

    @if(session('success'))
    <script>
        // Display success message in an alert
        alert("{{ session('success') }}");
    </script>
@endif


    <script src="{{ asset("/js/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset("/js/jquery-migrate-3.3.2.min.js") }}" defer></script>
    <script src="{{ asset("/js/bootstrap.min.js") }}" defer></script>
    <script src="{{ asset("/js/jquery.easing.js") }}" defer></script>
    <script src="{{ asset("/js/jquery-waypoints.js") }}" defer></script>
    <script src="{{ asset("/js/jquery-validate.js") }}" defer></script>
    <script src="{{ asset("/js/jquery.prettyPhoto.js") }}" defer></script>
    <script src="{{ asset("/js/slick.min.js") }}" defer></script>
    <script src="{{ asset("/js/numinate.min.js") }}" defer></script>
    <script src="{{ asset("/js/imagesloaded.min.js") }}" defer></script>
    <script src="{{ asset("/js/jquery-isotope.js") }}" defer></script>
    <script src="{{ asset("/js/main.js") }}" defer></script>


   </body>
</html>
