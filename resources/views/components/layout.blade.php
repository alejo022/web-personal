<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    {{-- Bootstrap  4.6 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <!-- HOJAS DE ESTILO -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sobremi.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/servicios.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/portafolio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contacto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">

    <!--libreria animate css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- PARA VER EL BOTON WPP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- PARA EL SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>

<body>

    <video width="auto" height="auto" class="fondo-video" autoplay loop>
        <source src="{{asset('video/video.mp4')}}" type="video/mp4">
        {{-- <source src="movie.ogg" type="video/ogg"> --}}
        Your browser does not support the video tag.
    </video>

    <div class="font-sans text-gray-900 antialiased">


        <x-menu />

        {{ $slot }}

        @include('parciales.footer')

        {{-- <a href="https://wa.me/573136513131" aria-label="Contactanos en WhatsApp" rel="noopener" class="float"
            target="_blank" data-bs-toggle="popover" data-bs-trigger="hover focus" title="Whatsapp Soporte Cetiia"
            data-bs-content="Contacta a soporte técnico cetiia si necesitas acompañamiento">
            <i class="fab fa-whatsapp my-float fa-heart fa-beat" style="--fa-animation-duration: 2s;"></i>
        </a> --}}

        <a href="https://wa.link/uc47rr" class="float" target="_blank">
            <i class="fab fa-whatsapp my-float fa-heart fa-beat" style="--fa-animation-duration: 2s;"></i>
        </a>

    </div>


    {{-- Bootstrap  4.6 --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>

    <script src="{{asset('js/piedra_papel_tijera.js')}}"></script>
</body>

</html>
