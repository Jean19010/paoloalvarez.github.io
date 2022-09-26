//Preloader
window.onload = function(){
 $('#onload').fadeOut();
 $('body').removeClass('hidden');

}



//Ejecutar funcion en el evento click
document.getElementById("page1").addEventListener("click", showDiv1);
document.getElementById("page2").addEventListener("click", showDiv2);
document.getElementById("btn_open").addEventListener("click", open_close_menu);
document.getElementById("btn_open").addEventListener("click", centrarContenido1);


//declaramos variables
var divContenido = document.getElementById("divContenido");
var divConocimiento = document.getElementById("divConocimiento");
//variables para el cambio de paginas
var page1 = document.getElementById("page1");
var page2 = document.getElementById("page2");


//variables para el side
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");


//Función para el centrado del div contenido
function centrarContenido1(){
   divContenido.classList.toggle("inicio_page_contenido_mod");
   divConocimiento.classList.toggle("inicio_page_conocimientos_mod");
 
}



//Funciones para mostrar y ocultar divs
function showDiv1(){
    document.getElementById('div1').style.display='';
    document.getElementById('div2').style.display='none';
    page1.classList.add("selected");
    page2.classList.remove("selected");
    
}

function showDiv2(){
    document.getElementById('div1').style.display='none';
    document.getElementById('div2').style.display='';
    page1.classList.remove("selected");
    page2.classList.add("selected");
   
}



//Evento para mostrar y ocultar el menú
function open_close_menu(){
    body.classList.toggle("body_move");
    side_menu.classList.toggle("menu__side_move");
}





//Si el ancho de la pagina es menor a 760px, ocultará el menú al recargar la pagina


if(window.innerWidth < 760){
    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}

//Haciendo el menu responsive

window.addEventListener("resize", function(){

    if(this.window.innerWidth >760){
        body.classList.remove("body_move");
        side_menu.classList.remove("menu__side_move");
    }

    if(this.window.innerWidth <760){
        body.classList.add("body_move");
        side_menu.classList.add("menu__side_move");
    }
});