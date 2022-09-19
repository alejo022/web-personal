<x-layout>




    <section class="servicios" id="servicios">

        <h4 class="text-center w-100">
            Juego Piedra, Papel o tijera
        </h4>
        <p class="text-center w-100">Juega contra la maquina...</p>

        <section style="max-width: 500px;margin: auto;">


            <div class="container">
                <div id="cajon-resultado" style="max-height: 400px;">
                    <p id="resultado" class="text-center w-100">
                        Haz tu elección para comenzar
                      </p>
                    <div class="row">
                        <div class="col-md-6">
                            <img id="img-maquina" src="{{asset('img/piedra_papel_tijera/pregunta.png')}}" alt="">
                        </div>
                        <div class="col-md-6">
                            <img id="img-usuario" src="{{asset('img/piedra_papel_tijera/pregunta.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div id="grupo_botones" class="border shadow-md d-flex justify-content-center align-items-center"
              style="border-radius: 15px;" >
              <button class="btn" id="piedra">
                <img src="{{asset('img/piedra_papel_tijera/piedra.png')}}" class="card-img-top" style="max-height: 100%;" alt="...">
                <div class="card-body">
                  <p class="card-text text-center">Piedra</p>
                </div>
              </button>
              <button class="btn" id="papel">
                <img src="{{asset('img/piedra_papel_tijera/papel.png')}}" class="card-img-top" style="max-height: 100%;" alt="...">
                <div class="card-body">
                  <p class="card-text text-center">Papel</p>
                </div>
              </button>
              <button class="btn" id="tijera">
                <img src="{{asset('img/piedra_papel_tijera/tijera.png')}}" class="card-img-top" style="max-height: 100%;" alt="...">
                <div class="card-body">
                  <p class="card-text text-center">Tijera</p>
                </div>
              </button>
            </div>
          </section>
    </section>

</x-layout>
