<x-layout>

    <section class="servicios" id="servicios">
        <div class="container mt-4 mb-4">
            <div class="modal-header mb-4 content-titulo justify-content-center text-uppercase">
                <h3>
                    Juego Piedra, Papel o tijera
                </h3>
            </div>
            <h4 class="text-center w-100 font-weight-bold">Juega contra la maquina...</h4>
            <section style="max-width: 500px;margin: auto;">
                <div class="container">
                    <div id="cajon-resultado" style="max-height: 400px;">
                        <h4 id="resultado" class="text-center w-100 text-azul font-weight-bold">
                            Haz tu elección para comenzar
                        </h4>
                        <div class="row mt-4 mb-4">
                            <div class="col-md-6">
                                <div class="caja-jugador"
                                    style="height: 200px; background-color: rgba(255,255,255,0.5);padding: 2%;display: flex;align-items: center;justify-content: space-between;border-radius:10px;flex-direction: column;border:2px solid #54a7c0;transform: rotate(-10deg);">
                                    <img id="img-usuario" src="{{ asset('img/piedra_papel_tijera/pregunta.png') }}"
                                        alt="">
                                    <div>
                                        <p class="font-weight-bold">
                                            Jugador
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="caja-maquina"
                                    style="height: 200px; background-color: rgba(255,255,255,0.5);padding: 2%;display: flex;align-items: center;justify-content: space-between;border-radius:10px;flex-direction: column;border:2px solid #54a7c0;transform: rotate(10deg);">
                                    <img id="img-maquina" src="{{ asset('img/piedra_papel_tijera/pregunta.png') }}"
                                        alt="">
                                    <div>
                                        <p class="font-weight-bold">
                                            Maquina
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="grupo_botones" class="shadow d-flex justify-content-center align-items-center mt-4"
                    style="border-radius: 15px;border:2px solid #54a7c0">
                    <button class="btn" id="piedra">
                        <img src="{{ asset('img/piedra_papel_tijera/piedra.png') }}" class="card-img-top"
                            style="max-height: 100%;" alt="Piedra">
                        <div class="card-body">
                            <p class="card-text text-center">Piedra</p>
                        </div>
                    </button>
                    <button class="btn" id="papel">
                        <img src="{{ asset('img/piedra_papel_tijera/papel.png') }}" class="card-img-top"
                            style="max-height: 100%;" alt="Papel">
                        <div class="card-body">
                            <p class="card-text text-center">Papel</p>
                        </div>
                    </button>
                    <button class="btn" id="tijera">
                        <img src="{{ asset('img/piedra_papel_tijera/tijera.png') }}" class="card-img-top"
                            style="max-height: 100%;" alt="Tijera">
                        <div class="card-body">
                            <p class="card-text text-center">Tijera</p>
                        </div>
                    </button>
                </div>
            </section>
        </div>
    </section>

</x-layout>
