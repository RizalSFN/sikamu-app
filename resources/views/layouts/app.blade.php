<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SiKaMU - app</title>
    <link rel="icon" type="image/x-icon" href="img/logo-app.png">
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
</head>

<body>
    @yield('component')

    <script src="{{ asset('js/leaflet.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
