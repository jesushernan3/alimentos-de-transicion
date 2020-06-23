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

        <link rel="stylesheet" href="/css/swiper.css">
        <link rel="stylesheet" href="/css/swiper.min.css">


    </head>
    <body>
      @include('plantillas.parciales.header')
      @yield('contenido')
      @include('plantillas.parciales.footer')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/swiper.js"></script>
    <script src="/js/swiper.min.js"></script>
    <script>
      var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters

        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
          el: '.swiper-scrollbar',
        },
      })
    </script>
    </body>
    </html>
    