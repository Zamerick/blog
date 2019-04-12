<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msapplication-TileColor" content="#0c0e10">
        <meta name="theme-color" content="#0c0e10">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script charset="UTF-8" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/languages/go.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0c0e10">

        <title>Blog | Alex Oxthorn</title>
    </head>
    <body>
        <div id="app" class="flex background text-white">
            @include('sidebar')
            @yield('content')
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
