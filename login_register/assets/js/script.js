document.getElementById("btniniciarsesion").addEventListener("click", iniciarSesion);
document.getElementById("btnregistrar").addEventListener("click", registrar);
window.addEventListener("resize", anchoPagina);
//Declaración de variables

let containterLoginRegistro = document.querySelector(".container_loginregistro");
let formLogin = document.querySelector(".form_login");
let formRegistro = document.querySelector(".form_registro");
let cajaTraseraLogin = document.querySelector(".caja_trasera_login");
let cajaTraseraRegistro = document.querySelector(".caja_trasera_registro");

function anchoPagina(){
    if(window.innerWidth > 850){
        cajaTraseraLogin.style.display = "block";
        cajaTraseraRegistro.style.display = "block";
    } else {
        cajaTraseraRegistro.style.display = "block";
        cajaTraseraRegistro.style.opacity = "1";
        cajaTraseraLogin.style.display = "none";
        formLogin.style.display = "block";
        formRegistro.style.display = "none";
        containterLoginRegistro.style.left = "0px";
    }
}

anchoPagina();

function iniciarSesion() {
    formRegistro.style.display = "none";
    containterLoginRegistro.style.left = "10px";
    formLogin.style.display = "block";
    cajaTraseraRegistro.style.opacity = "1";
    cajaTraseraLogin.style.opacity = "0";

}

function registrar() {
    formRegistro.style.display = "block";
    containterLoginRegistro.style.left = "410px";
    formLogin.style.display = "none";
    cajaTraseraRegistro.style.opacity = "0";
    cajaTraseraLogin.style.opacity = "1";

}