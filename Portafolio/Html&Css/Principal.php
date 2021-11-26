<?php

	session_start();

	if(!isset($_SESSION["'Correo'"])){
		echo '
			<script>
			alert("Para ingresar, por favor primero inicia sesión.");
			window.location = "../index.php";
			</script>
		';
		session_destroy();
		die();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"><!--Adaptable a dispositivos Moviles-->
	<!--GoogleFonts-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet"> 
	<!--Fin_GoogleFonts-->
	<link rel="stylesheet" href="Style.css">
	<title> Portafolio - Registro de Actividesde </title>
</head>

<body>

	<div class="contenedor">
		<!--Diseño de la pagina Encabezado, Presentación , Atajos & BARRA DE BUSQUEDA--> 
		<header> 
			<div class="Presentacion">
				<h1>Jhonmarco Morillo</h1>
				<p>Interfas web con el usuario</p>
			</div>
			<form action="">
				<input type="text" class="buscador" id="buscador" placeholder="Buscar"> <!--BARRA DE BUSQUEDA-->
			</form>
			<div class="atajos" id="atajos">
				<a href="#" class="activo">Todos</a>
				<a href="#">Calculadora</a>
				<a href="#">Investigaciones</a>
				<a href="#">Proximamente</a>
			</div>
		</header>
		<!--Estructura segun las indicaciones de la libreria Muuri-->
		<!--Imagenes Mostradas // Atajo, Etiquetas & Enlaces -->
		<section class="grid" id="grid">
			<div class="item" 
				 data-atajo="calculadora" 
				 data-etiquetas="Calculadora calculadora Suma suma Resta resta Multiplicación multiplicación División división Calcular calcular "
				 data-descripcion="1.- Lorem ipsum dolor sit amet consectetur."
			>
			 
				<div class="item-contenido">
					<a href="../Html&Css/Calculadora.html" class="Calcu">Pulsa</a>
					<img src="../Photo/Calculadora.png" alt="">
					<a href="../Html&Css/Calculadora.html" class="Calcu">Pulsa</a>

				</div>
			</div>

			<div class="item"
				 data-atajo="investigaciones"
				 data-etiquetas="investigación(es) poo Poo POO Conocimiento CONOCIMIENTO Pragración Orientado a Objetos progrmacion programación Pogramación orientada A objeto Investigación investigación Investigacion investigacion tarea Tarea Lectura lectura INVESTIGACIÓN INVESTIGACIONES investigaciones Investigaciones"
				 data-descripcion="2.- Lorem ipsum dolor sit amet consectetur."
			>
			
				<div class="item-contenido">
					<a href="../Html&Css/POO.html" class="POO">Pulsa</a>
					<img src="../Photo/POO.png" alt="">
					<a href="../Html&Css/POO.html" class="POO">Pulsa</a>
					
				</div>
			</div>

			<div class="item"
				 data-atajo="proximamente"
				 data-etiquetas="coming soon Coming Soon Proximamente proximamente para el futuro Para El Futuro"
				 data-descripcion="3.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<a href="#" class="Pro"></a>
					<img src="../Photo/Comming.png" alt="">
					<a href="#" class="Pro"></a>
				</div>
			</div>
			
		</section>
		<!--Fin_Estructura segun las indicaciones de la libreria Muuri-->
		<!--Fin_Imagenes Mostradas // Atajo, Etiquetas & Enlaces -->
		

			<!--
			<div class="Fin_pagina">
				<p><a href="#">Interfas web con el Usuaro</a> - <a href="#">JM</a></p>
			</div>
			-->
		</footer>
		
	</div>

	<!--ETIQUETAS DE SCRIPT Animaciónes Moori-->
	<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script> <!--LINRERIA DE ANIMACIONES-->
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script><!--LIBRERIA BASE-->
	<!--FIN_ETIQUETAS DE SCRIPT-->
	<script src="../Js/Activator.js"></script> <!--ETIQUETA->

		
</body>
</html>