<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bumble Bees IT Solutions | Andavar College of Nursing - Web Portal</title>

  <meta name="robots" content="noindex, nofollow">
  <link rel="shortcut icon" type="image/png" href="{{ asset("/assets/images/logos/favicon.png") }}">
  <link rel="stylesheet" href="{{ asset("/assets/css/styles.min.css") }}">
</head>

<body>


    @yield('content-dashboard')




    <script src="{{ asset("/assets/libs/jquery/dist/jquery.min.js") }}"></script>
    <script src="{{ asset("/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("/assets/js/sidebarmenu.js") }}"></script>
    <script src="{{ asset("/assets/js/app.min.js") }}"></script>
    <script src="{{ asset("/assets/libs/apexcharts/dist/apexcharts.min.js") }}"></script>
    <script src="{{ asset("/assets/libs/simplebar/dist/simplebar.js") }}"></script>
    <script src="{{ asset("/assets/js/dashboard.js") }}"></script>


</body>
</html>
