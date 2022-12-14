const piedra = "piedra";
const papel = "papel";
const tijeras = "tijera";

const empate = 0;
const gano = 1;
const perdio = 2;

const botonPiedra = document.getElementById("piedra");
const botonPapel = document.getElementById("papel");
const botonTijera = document.getElementById("tijera");
const textoResultado = document.getElementById("resultado");
const imgMaquina = document.getElementById("img-maquina");
const imgUsuario = document.getElementById("img-usuario");

botonPiedra.addEventListener("click", () => {
    /* console.log("piedra"); */
    play(piedra);
});

botonPapel.addEventListener("click", () => {
    /* console.log("papel"); */
    play(papel);
});

botonTijera.addEventListener("click", () => {
    /* console.log("tijera"); */
    play(tijeras);
});

function play(OpcionUsuario) {

    imgUsuario.src = "img/piedra_papel_tijera/" + OpcionUsuario + ".png";

    textoResultado.innerHTML = "Jugando...";

    const intervalo = setInterval(function () {
        const OpcionMaquina = calcularOpcionMaquina();
        imgMaquina.src = "img/piedra_papel_tijera/" + OpcionMaquina + ".png";
    }, 200);

    setTimeout(function () {

        clearInterval(intervalo);

        const OpcionMaquina = calcularOpcionMaquina();

        /* console.log (OpcionMaquina); */

        const resultado = calcularResultado(OpcionUsuario, OpcionMaquina)

        imgMaquina.src = "img/piedra_papel_tijera/" + OpcionMaquina + ".png";

        switch (resultado) {
            case empate:
                /* alert(OpcionMaquina+"Hubo un empate"); */
                textoResultado.innerHTML = "Hubo un empate";
                break;
            case gano:
                /* alert(OpcionMaquina+"Ganaste"); */
                textoResultado.innerHTML = "Ganaste";
                break;
            case perdio:
                /* alert(OpcionMaquina+"Perdiste"); */
                textoResultado.innerHTML = "Perdiste";
                break;
        }
    }, 2000);

}

function calcularOpcionMaquina() {
    const numero = Math.floor(Math.random() * 3);
    switch (numero) {
        case 0:
            return piedra;
        case 1:
            return papel;
        case 2:
            return tijeras;
    }
}

function calcularResultado(OpcionUsuario, OpcionMaquina) {
    if (OpcionUsuario === OpcionMaquina) {
        return empate
    } else if (OpcionUsuario === piedra) {

        if (OpcionMaquina === papel) return perdio;
        if (OpcionMaquina === tijeras) return gano;

    } else if (OpcionUsuario === papel) {

        if (OpcionMaquina === piedra) return gano;
        if (OpcionMaquina === tijeras) return perdio;

    } else if (OpcionUsuario === tijeras) {

        if (OpcionMaquina === piedra) return perdio;
        if (OpcionMaquina === papel) return gano;

    }
}
