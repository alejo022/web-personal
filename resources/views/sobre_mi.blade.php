<x-layout>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('css/caruselInicio.css') }}">

    <div class="container mt-4 mb-4">
        <div class="modal-header mb-4 content-titulo justify-content-center text-uppercase">
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
