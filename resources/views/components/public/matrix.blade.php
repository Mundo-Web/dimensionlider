<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="language" content="spanish">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Somos especialistas en Wall Panel, mármol UV, piedra PU y otros productos para ti. Confía en la calidad de Deco TAB y dale otro estilo a tu ambiente favorito.">
    <title> Venta de decoración de interiores - Deco TAB </title>
    <meta name="keywords"
        content="Wall Panel, Mármol UV, Piedra PU, Piedra Cincelada, Wall Panel Negro, Pisos SPC, Panel Tipo piedra PU" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    {{-- Aqui van los CSS --}}
    @yield('css_importados')

    {{-- Swipper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Alpine --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>

    <style>
      @font-face {
        font-family: "satoshimedium";
        src: url("fonts/satoshi-medium-webfont.woff") format("woff");
        font-weight: normal;
        font-style: normal;
      }

      @font-face {
        font-family: "satoshiregular";
        src: url("fonts/satoshi-regular-webfont.woff") format("woff");
        font-weight: normal;
        font-style: normal;
      }

      @font-face {
        font-family: "satoshibold";
        src: url("fonts/satoshi-bold-webfont.woff") format("woff");
        font-weight: normal;
        font-style: normal;
      }

      
    </style>
</head>

<body>
    @include('components.public.header')

    <div>
        {{-- Aqui va el contenido de cada pagina --}}
        @yield('content')

    </div>



    @include('components.public.footer')



    @yield('scripts_importados')
    

</body>

</html>
