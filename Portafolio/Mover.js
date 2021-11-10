//Login y Contraseña 

document.getElementById("Inicio_Sesión").addEventListener("click", register);

// Variables
var Contenedor_IniciarRegistrar = document.querySelector(".Contenedor_IniciarRegistrar");
var Iniciar_Sesión = document.querySelector(".Iniciar_Sesión");
var Iniciar_Registro = document.querySelector(".Iniciar_Registro");
var Login = document.querySelector(".Login");
var Registro = document.querySelector(".Registro");

function register(){
	Iniciar_Registro.style.display = "block";
	Contenedor_IniciarRegistrar.style.left = "410px";
	Iniciar_Sesión.style.display = "none";
	Registro.style.opacity = "0";
	Login.style.opacity = "1";
}