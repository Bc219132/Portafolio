<?php

    session_start();

    include "ConexionUnic.php";

    $Correo = $_POST['Correo'];
    $Contrasena = $_POST['Contrasena'];

    $Validador_login = mysqli_query($conexion, "SELECT * FROM registrouni WHERE Correo= '$Correo' and Contrasena= '$Contrasena'");

    if(mysqli_num_rows($Validador_login) > 0){
        $_Sesion['Correo'] = '$Correo'
        header("location: ../Html&Css/Principal.php");
        exit;
    }else{
        echo '
            <script>
            alert("Datos invalidos, por favor verifica los datos");
            window.location = "../index.php";
            </script>
        ';
        exit;
    }

?>