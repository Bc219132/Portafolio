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

	// Cierre al presionar el boton (X)
	document.querySelector('#bt').addEventListener('click', () => {
		zoo.classList.remove('activo');
	});
	//Fin_Cierre al presionar el boton (X)

	// Cierre al presionar en cualquier parte de la pantalla
	zoo.addEventListener('click', (accion) => {
		accion.target.id === 'zoo' ? zoo.classList.remove('activo') : '';
	});
	//Fin_Cierre al presionar en cualquier parte de la pantalla
});
//FIN_FUNCIÓN GRID : PERMITE TENER EL PEQUEÑO DELAY AL CARGAR LA PAGINA 