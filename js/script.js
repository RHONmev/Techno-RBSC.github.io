// Scroll up

document.getElementById("button-up").addEventListener("click", scrollUp);

function scrollUp(){

    var currentScroll = document.documentElement.scrollTop;

    if (currentScroll > 0){
        window.requestAnimationFrame(scrollUp);
        window.scrollTo (0, currentScroll - (currentScroll / 10));
    }
}


///

buttonUp = document.getElementById("button-up");

window.onscroll = function(){

    var scroll = document.documentElement.scrollTop;

    if (scroll > 500){
        buttonUp.style.transform = "scale(1)";
    }else if(scroll < 500){
        buttonUp.style.transform = "scale(0)";
    }

}













//equivalencias=track= top side    

//carrusel

'use strict'

const grande    = document.querySelector('.carruselList')
const punto     = document.querySelectorAll('.carrusel-arrow')

// Cuando CLICK en punto
    // Saber la posición de ese punto
    // Aplicar un transform translateX al grande
    // QUITAR la clase activo de TODOS puntos
    // AÑADIR la clase activo al punto que hemos hecho CLICK

// Recorrer TODOS los punto
punto.forEach( ( cadaPunto , i )=> {
    // Asignamos un CLICK a cadaPunto
    punto[i].addEventListener('click',()=>{

        // Guardar la posición de ese PUNTO
        let posicion  = i
        // Calculando el espacio que debe DESPLAZARSE el GRANDE
        let operacion = posicion * -33

        // MOVEMOS el grand
        grande.style.transform = `translateX(${ operacion }%)`

        // Recorremos TODOS los punto
        punto.forEach( ( cadaPunto , i )=>{
            // Quitamos la clase ACTIVO a TODOS los punto
            punto[i].classList.remove('activo')
        })
        // Añadir la clase activo en el punto que hemos hecho CLICK
        punto[i].classList.add('activo')

    })
})



'use strict'

const grande2    = document.querySelector('.carruselList2')
const punto2     = document.querySelectorAll('.carrusel-arrow2')

// Cuando CLICK en punto2
    // Saber la posición de ese punto2
    // Aplicar un transform translateX al grande2
    // QUITAR la clase activo de TODOS punto2s
    // AÑADIR la clase activo al punto2 que hemos hecho CLICK

// Recorrer TODOS los punto2
punto2.forEach( ( cadaPunto2 , i )=> {
    // Asignamos un CLICK a cadaPunto2
    punto2[i].addEventListener('click',()=>{

        // Guardar la posición de ese PUNTO2
        let posicion  = i
        // Calculando el espacio que debe DESPLAZARSE el GRANDE2
        let operacion = posicion * -33

        // MOVEMOS el grand
        grande2.style.transform = `translateX(${ operacion }%)`

        // Recorremos TODOS los punto2
        punto2.forEach( ( cadaPunto2 , i )=>{
            // Quitamos la clase ACTIVO a TODOS los punto2
            punto2[i].classList.remove('activo')
        })
        // Añadir la clase activo en el punto2 que hemos hecho CLICK
        punto2[i].classList.add('activo')

    })
})


'use strict'

const grande0    = document.querySelector('.carruselList0')
const punto0     = document.querySelectorAll('.carrusel-arrow0')

punto0.forEach( ( cadaPunto0 , i )=> {
    // Asignamos un CLICK a cadaPunto0
    punto0[i].addEventListener('click',()=>{

        // Guardar la posición de ese PUNTO0
        let posicion  = i
        // Calculando el espacio que debe DESPLAZARSE el GRANDE0
        let operacion = posicion * 0

        // MOVEMOS el grand
        grande0.style.transform = `translateX(${ operacion }%)`

        // Recorremos TODOS los punto0
        punto0.forEach( ( cadaPunto0 , i )=>{
            // Quitamos la clase ACTIVO a TODOS los punto0
            punto0[i].classList.remove('activo')
        })
        // Añadir la clase activo en el punto0 que hemos hecho CLICK
        punto0[i].classList.add('activo')

    })
})







//Buscador de contenido




//Declarando variables
bars_search =       document.getElementById("ctn-bars-search");
cover_ctn_search =  document.getElementById("cover-ctn-search");
inputSearch =       document.getElementById("#inputSearch");
box_search =        document.getElementById("#box-search");

//Ejecutando funciones
document.getElementById("search").addEventListener("click", mostrar_buscador);
document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);


//Funcion para mostrar el buscador
function mostrar_buscador(){

    bars_search.style.top = "5.5%";
    cover_ctn_search.style.display = "block";
    inputSearch. focus;
    if (inputSearch.value === "") {
        box_search.style.display = "none";
    }
}

//Funcion para ocultar el buscador
function ocultar_buscador(){

    bars_search.style.top = "-10px";
    cover_ctn_search.style.display = "none";
    inputSearch.value = "0";
    box_search.style.display = "none";
    
}


//Creando filtrado de busqueda

document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);

function buscador_interno() {


    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");

    //Recorriendo elementos a filtrar mediante los "li"
    for (i = 0; i < li.length; i++) {

        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;

        if (textValue.toUpperCase().indexOf(filter) > -1) {

            li[i].style.display = "";
            box_search.style.display = "block";

            if (inputSearch.value === "") {
                box_search.style.display = "none";
            }

        } else {
            li[i].style.display = "none";
        }

    }



}


















