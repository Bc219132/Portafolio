<?php

	session_start();

	if(isset($_SESSION["'Correo'"])){
		header("location: Html&Css/Principal.php");
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

	<!--Login y Contraseña-->
	<main>

		<div class="contenedor__todo">
			<div class="caja__trasera">
				<div class="caja__trasera-login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>Inicia sesión para entrar en la página</p>
					<button id="btn__iniciar-sesion">Iniciar Sesión</button>
				</div>
				<div class="caja__trasera-register">
					<h3>¿Aún no tienes una cuenta?</h3>
					<p>Regístrate para que puedas iniciar sesión</p>
					<button id="btn__registrarse">Regístrarse</button>
				</div>
			</div>

			<!--Formulario de Login y registro-->
			<div class="contenedor__login-register">
				<!--Login-->
				<form action="Php/Ingreso_usuario.php" method="POST" class="formulario__login">
					<h2>Iniciar Sesión</h2>
					<input type="text" placeholder="Correo Electronico" name="Correo">
					<input type="password" placeholder="Contraseña" name="Contrasena">
					<button>Entrar</button>
				</form>
				
				<!--Register-->
				<form action="Php/registro_usuario.php" method="POST" class="formulario__register">
					<h2>Regístrarse</h2>
					<input type="text" placeholder="Nombre completo" name="nombre_completo">
					<input type="text" placeholder="Correo Electronico" name="Correo">
					<input type="text" placeholder="Usuario" name="Usuario">
					<input type="password" placeholder="Contraseña" name="Contrasena">
					<button>Regístrarse</button>
				</form>
			</div>
		</div>
		<script src="Js/Movimient.js"></script>
	</main>
</body>

</html>
