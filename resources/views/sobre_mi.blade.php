<x-layout>

    <style>
        .btn__container {
            /* height: 100vh; */
            display: flex;
            justify-content: center;
            align-items: center
        }

        .btn__container a {
            margin-right: 10px
        }

        .btn {
            min-width: 110px;
            background-color: #fff;
            padding: 1rem 2rem;
            text-decoration: none;
            color: #C71E7E;
            display: flex;
            transition: all .2s ease-in-out
        }

        .btn i {
            color: #DF3796;
            font-size: 20px;
            padding-right: 10px;
            transition: all .3s ease-in-out
        }

        .btn span {
            font-family: Roboto, sans-serif;
            align-self: center;
            -webkit-transform: translateX(0px);
            transform: translateX(0px);
            transition: all .1s ease-in-out;
            opacity: 1
        }

        .btn:hover {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            background: linear-gradient(to right, #ff3019 0, #c90477 100%);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .1)
        }

        .btn:hover i {
            -webkit-transform: translateX(45px);
            transform: translateX(45px);
            padding-right: 0;
            color: #FFF
        }

        .btn:hover span {
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
            opacity: 0
        }

        .btn:active {
            -webkit-transform: scale(1);
            transform: scale(1);
            box-shadow: 0 2px 10px rgba(0, 0, 0, .1)
        }

        .btn-f {
            min-width: 110px;
            background-color: #fff;
            padding: 1rem 2rem;
            text-decoration: none;
            color: #286ED6;
            display: flex;
            transition: all .2s ease-in-out
        }

        .btn-f i {
            color: #286ED6;
            font-size: 20px;
            padding-right: 10px;
            transition: all .3s ease-in-out
        }

        .btn-f span {
            font-family: Roboto, sans-serif;
            align-self: center;
            -webkit-transform: translateX(0px);
            transform: translateX(0px);
            transition: all .1s ease-in-out;
            opacity: 1
        }

        .btn-f:hover {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            background-color: #286ED6;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .1)
        }

        .btn-f:hover i {
            -webkit-transform: translateX(45px);
            transform: translateX(45px);
            padding-right: 0;
            color: #FFF
        }

        .btn-f:hover span {
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
            opacity: 0
        }

        .btn-f:active {
            -webkit-transform: scale(1);
            transform: scale(1);
            box-shadow: 0 2px 10px rgba(0, 0, 0, .1)
        }

        .btn-y {
            min-width: 110px;
            background-color: #fff;
            padding: 1rem 2rem;
            text-decoration: none;
            color: red;
            display: flex;
            transition: all .2s ease-in-out
        }

        .btn-y i {
            color: red;
            font-size: 20px;
            padding-right: 10px;
            transition: all .3s ease-in-out
        }

        .btn-y span {
            font-family: Roboto, sans-serif;
            align-self: center;
            -webkit-transform: translateX(0px);
            transform: translateX(0px);
            transition: all .1s ease-in-out;
            opacity: 1
        }

        .btn-y:hover {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            background-color: red;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .1)
        }

        .btn-y:hover i {
            -webkit-transform: translateX(45px);
            transform: translateX(45px);
            padding-right: 0;
            color: #FFF
        }

        .btn-y:hover span {
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
            opacity: 0
        }

        .btn-y:active {
            -webkit-transform: scale(1);
            transform: scale(1);
            box-shadow: 0 2px 10px rgba(0, 0, 0, .1)
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('css/caruselInicio.css') }}">

    <div class="container mt-4 mb-4">

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/alejo.jpg') }}" class="shadow m-auto" alt="" style="border-radius:20px">
            </div>
            <div class="col-md-6" style="    display: flex;
            flex-direction: column;
            justify-content: space-around;">

                <div>
                    <p>
                        Me dedico al Desarrolado web usando lenguajes de programación como Python con su framework Django ,
                        PHP con su framewok Laravel y Javascript para el lado del servidor.
                    </p>
                    <p>
                        Conocimiento en otros lenguajes de programación como Java, Ruby y su Framework Rails.
                    </p>
                    <p>

                        con excelentes habilidades tanto practicas como teóricas, conocimientos en Redes de datos,
                        Telecomunicaciones, Manejo básico del Ingles.
                    </p>

                </div>

                <div class="btn__container">
                    <a href="#" class="btn">
                        <i class="fab fa-instagram"></i>
                        <span>instagram</span>
                    </a>
                    <a href="#" class="btn-f">
                        <i class="fab fa-facebook"></i>
                        <span>facebook</span>
                    </a>
                    <a href="#" class="btn-y">
                        <i class="fab fa-youtube"></i>
                        <span>youtube</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="modal-header mb-4 mt-4 content-titulo justify-content-center text-uppercase">
            <h3>
                ¡Mis Skills!
            </h3>
        </div>

        <div class="">
            <p class="texto-centrar">
                Soy un desarrollador de software a la medida, con experiencia en el desarrollo web.
                Mis principales tecnologías de desarrollo son HTML5, CSS3, JavaScript, PHP, PYTHON, entre otras. <br>

                Me encanta estudiar y aprender continuamente, me gusta asumir nuevos desafíos y buscar constantemente
                soluciones.
            </p>
        </div>

        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/HTML5.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/bootstrap.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/Logojs.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/django.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/git.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/GitHub-Logo.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/java.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/laravel-logo.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/Logocss.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/Logojs.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/php.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logos_programacion/python.png') }}" alt="">
                    </div>
                </div>
                {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
                <div class="swiper-pagination"></div>
            </div>

        </div>

        <div class="modal-header mb-4 mt-5 content-titulo justify-content-center text-uppercase">
            <h3>
                Puesto de trabajo
            </h3>
        </div>

        <img src="{{ asset('img/Oficina.jpg') }}" class="shadow" alt="" style="border-radius:20px">

    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</x-layout>
