<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fate Esports</title>
    
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/autenticacao.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}" type="text/css">
    @yield('styles')
    
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;700&display=swap" rel="stylesheet" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head> 

<body id="masterPage">
    @include("layout.partials.header")

    @yield('content')

    @include("layout.partials.footer")

    @include("layout.partials.autenticacao")

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/autenticacao.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"> </script>
    @yield('scripts')
</body>

</html>