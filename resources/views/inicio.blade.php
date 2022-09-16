<x-layout>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('css/caruselInicio.css') }}">

    <section class="contecInicio">
        <div class="nav">
            {{-- <x-menu /> --}}
        </div>
        <div class="photo-text">
            <h3 data-ix="skype" class="animate__animated animate__rotateIn">DESARROLLO DE SOFTWARE A LA MEDIDA </h3>
            <p style="text-align: center;">

            </p>
        </div>
        <div class="overlay"></div>
    </section>

    <section class="container" id="skills">

        <div class="modal-header mb-4 justify-content-center">
            <h4 class="texto-centrar">¡Mis Skills!</h4>
        </div>

        <div class="">
            <p class="texto-centrar">
                Soy un desarrollador de software a la medida, con experiencia en el desarrollo web.
                Mis principales tecnologías de desarrollo son HTML5, CSS3, JavaScript, PHP, PYTHON, entre otras. <br>

                Me encanta estudiar y aprender continuamente, me gusta asumir nuevos desafíos y buscar constantemente
                soluciones.
            </p>
        </div>

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

        <div class="tituLo">
            <ul class="flex-outer">
                <li class="centrar-boto">
                    <a type="submit" class="boton" href="{{ route('sobre-mi') }}">Ver más <i
                            class="fa-solid fa-circle-info"></i></a>
                </li>
            </ul>
        </div>
    </section>

    <section class="servicios" id="servicios">

        <h4 class="mb-5">HABILIDADES</h4>

        <div class="contenedor">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <div class="m-3">
                        <img src="img/Oficina.jpg" alt="logo-software" class="img-servicio"
                            style="object-fit: cover;margin: 0px auto -100px auto" />
                        <div class="card-personalizada" style="padding-top: 100px ;border: 2px solid #54a7c0;">
                            <div class="card-body">
                                <h4>Software a la medida</h4>
                                <p>Creación y desarrollo de sitios web para tu marca personal y empresa, con las
                                    tecnologías
                                    adecuadas.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <div class="m-3">
                        <img src="img/diseñoweb.jpg" alt="logo-diseño" class="img-servicio"
                            style="object-fit: cover;margin: 0px auto -100px auto" />
                        <div class="card-personalizada" style="padding-top: 100px ;border: 2px solid #54a7c0;">
                            <div class="card-body">
                                <h4>Diseño web</h4>
                                <p>Todos las páginas web son adaptables a dispositivos móviles, por lo que todas las
                                    personas
                                    podrán verla en el dispositivo que deseen</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">

                    <div class="m-3">
                        <img src="img/camaras.PNG" alt="logo-cctv" class="img-servicio"
                            style="object-fit: cover;margin: 0px auto -100px auto" />
                        <div class="card-personalizada" style="padding-top: 100px ;border: 2px solid #54a7c0;">
                            <div class="card-body">
                                <h4>Circuitos CCTV</h4>
                                <p>Lista para llegar a tu segmento de mercado ideal, con las nuevas tendencias de
                                    desarrollo.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tituLo">
                <ul class="flex-outer">
                    <li class="centrar-boto">
                        <a type="submit" class="boton" href="{{ route('habilidades') }}">Ver más <i
                                class="fa-solid fa-circle-info"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="portafolio" id="portafolio">

        <h4>PORTAFOLIO</h4>

        <div class="main-publico">
            <div class="albunes">
                <ul class="list-albunes">
                    <li>
                        <a href="#" target="_blank">

                            <div class="container-albun portafolio-item">

                                <img src="img/portada.png" alt="img SIWGPA" class="portafolio-img"
                                    style="object-fit: cover;    transition: all 1s ease 0.1s;" />
                                <div class="info-albun">
                                    <h2 class="nombre-albun">SIWGPA</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">

                            <div class="container-albun portafolio-item">

                                <img src="img/camaras.PNG" alt="img Camaras Seguridad" class="portafolio-img"
                                    style="object-fit: cover;    transition: all 1s ease 0.1s;" />
                                <div class="info-albun">
                                    <h2 class="nombre-albun">CAMARAS SEGURIDAD</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">

                            <div class="container-albun portafolio-item">

                                <img src="img/fitnes.png" alt="img Mundo Fitness" class="portafolio-img"
                                    style="object-fit: cover;    transition: all 1s ease 0.1s;" />
                                <div class="info-albun">
                                    <h2 class="nombre-albun">MUNDO FITNESS</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tituLo">
            <ul class="flex-outer">
                <li class="centrar-boto">
                    <a type="submit" class="boton" href="{{ route('portafolio') }}">Ver más <i
                            class="fa-solid fa-circle-info"></i></a>
                </li>
            </ul>
        </div>

    </section>

    @include('formContacto')

    <!-- Swiper JS -->
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

    {{-- <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script> --}}

</x-layout>
