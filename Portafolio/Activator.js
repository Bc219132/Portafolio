//API: ACTIVADOR DE LA LIBRERIA MUURI- INICIALIZANDO 
const grid = new Muuri('.grid', {
	layout: {                         //LAYOUT- ROUNDING : ESTILO UTILZADO
		rounding: false 
	}
});
//FIN_API: ACTIVADOR DE LA LIBRERIA MUURI- INICIALIZANDO API

//FUNCIÓN GRID-EVENTO : PERMITE TENER EL PEQUEÑO DELAY AL CARGAR LA PAGINA & USO DEL METODO MUURI
window.addEventListener('load', () => {   
	grid.refreshItems().layout(); //METODO GRID.REFRESHLTAMS
	document.getElementById('grid').classList.add('imagenes-cargadas'); // ACCEDER  A LA CLASE 


	// ACTIVADOR DE LOS ATAJOS 
	const enlaces = document.querySelectorAll('#atajos a'); //ACCESO A TODOS LOS ATAJOS
	enlaces.forEach((atajo) => {
		atajo.addEventListener('click', (accion) => {
			accion.preventDefault();				//ELIMINAR EL COMPORTAMIENTO POR DEFECTO DEL NAVEGADR
			enlaces.forEach((enlace) => enlace.classList.remove('activo'));
			accion.target.classList.add('activo');

			const atajo = accion.target.innerHTML.toLowerCase();
			atajo === 'todos' ? grid.filter('[data-atajo]') : grid.filter(`[data-atajo="${atajo}"]`);  //LLAMAR A TODA LAS IMAGENES, DE NO 
			                                                                                           //SER ASÍ LLAMA AL ATAJO SELECCIONADO POR EL USUARIO 
		});
	});
	// FIN_ACTIVADOR DE LOS ATAJOS

	// BUSQUEDA ESCRITA (BARRA DE BUSQUEDA)
	document.querySelector('#buscador').addEventListener('input', (accion) => {
		const busqueda = accion.target.value;
		grid.filter( (item) => item.getElement().dataset.etiquetas.includes(busqueda) );
	});
	// fIN_BUSQUEDA ESCRITA (BARRA DE BUSQUEDA)

});
//FIN_FUNCIÓN GRID : PERMITE TENER EL PEQUEÑO DELAY AL CARGAR LA PAGINA 

//Login y Contraseña 

//document.getElementById("Inicio_Sesión").addEventListener("click", register);

// Variables 
//var Contenedor_IniciarRegistrar = document.querySelector(".Contenedor_IniciarRegistrar");
//var Iniciar_Sesión = document.querySelector(".Iniciar_Sesión");
//var Iniciar_Registro = document.querySelector(".Iniciar_Registro");
//var Login = document.querySelector(".Login");
//var Registro = document.querySelector(".Registro");

//function register(){
//	Iniciar_Registro.style.display = "block";
//	Contenedor_IniciarRegistrar.style.left = "410px";
//	Iniciar_Sesión.style.display = "none";
//	Registro.style.opacity = "0";
//	Login.style.opacity = "1";
//}

// 

document.getElementById("Inicio_Sesión").addEventListener("click", register);

//Declarando variables
var formulario_login = document.querySelector(".Contenedor_IniciarRegistrar");
var formulario_register = document.querySelector(".Iniciar_Sesión");
var contenedor_login_register = document.querySelector(".Iniciar_Registro");
var caja_trasera_login = document.querySelector(".Login");
var caja_trasera_register = document.querySelector(".Registro");

function register(){
		formulario_register.style.display = "block";
		contenedor_login_register.style.left = "410px";
		formulario_login.style.display = "none";
		caja_trasera_register.style.opacity = "0";
		caja_trasera_login.style.opacity = "1";
	}