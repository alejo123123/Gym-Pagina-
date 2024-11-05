
const librasInput = document.querySelector('#libras');
const kilosInput = document.querySelector('#kilos');
const convertirbot = document.querySelector('#convertir');

// se añade un evnto de click el boton de convertir
convertirbot.addEventListener('click', function() {

    //si en la casilla de libras hay algo. se transformara a kilos
    if (librasInput.value !== '') {

        let libras = parseFloat(librasInput.value);
        let resultado = (libras * 0.453592).toFixed(2);
        kilosInput.value = resultado;


    //si en la casilla de kilos hay algo. se transformara a libras
    } else if (kilosInput.value !== ""){

        let kilos = parseFloat(kilosInput.value);
        let resultado2 = (kilos * 2.20462).toFixed(2);
        librasInput.value = resultado2;
    }
        //despues de 5 segundos las casillas quedaran vacias
    setTimeout(function() {
        librasInput.value = "";
        kilosInput.value = "";
    }, 5000)

})