<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AdT</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="/css/bulma.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/LineIcons.css">
        <link rel="stylesheet" href="/css/line-awesome.min.css">
    </head>
    <body>
      @include('plantillas.parciales.header')
      @yield('contenido')
      @include('plantillas.parciales.footer')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    </body>
    </html>
    