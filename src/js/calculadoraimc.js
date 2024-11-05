
const estaturainput = document.querySelector('#estatura')
const pesoinput = document.querySelector('#peso')
const calcularbot = document.querySelector('#calcular')
const resultadoinput = document.querySelector('#resultado')

//añadimos evento click a calcular 
calcularbot.addEventListener('click', function() {


    if(estaturainput.value !=='' || pesoinput.value !== '') {


    let resultado3 = pesoinput.value/(estaturainput.value*estaturainput.value);
        
    //para que el resultado solo agarre 2 decimales
    resultadoinput.value = resultado3.toFixed(2);

    }

    
       

})