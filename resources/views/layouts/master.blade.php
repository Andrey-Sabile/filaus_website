<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/tailwind.css') }}">
        <title>Filaus</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Source+Serif+Pro:wght@700&display=swap" rel="stylesheet">
        @stack('scripts')
    </head>
    
    <body>
        @include('layouts.nav')
        @yield('content')
    </body>
</html>