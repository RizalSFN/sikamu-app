<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SiKaMU - app</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/lg.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/leaflet.js') }}"></script>
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}"> --}}
</head>

<body>
    @yield('component')

    <script src="{{ asset('js/jquery-3.7.1.slim.min.js') }}"></script>
    {{-- <script type="module" src="{{ asset('js/firebase.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
</body>

</html>
