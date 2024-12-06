<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kajian Admin</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
</head>

<body>
    @include('layouts.header')
    @include('layouts.sidebar')
    @yield('content')

    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

    </nav>
    </header>
</body>