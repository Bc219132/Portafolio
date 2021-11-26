<?php

    include "ConexionUnic.php";

    $nombre_completo = $_POST["nombre_completo"];
    $Correo = $_POST["Correo"];
    $Usuario = $_POST["Usuario"];
    $Contrasena = $_POST["Contrasena"]; 

    //Contraseña encriptada
    $Contrasena = hash('sha512', $Contrasena);

    $query = "INSERT INTO registrouni(nombre_completo, Correo, Usuario, Contrasena) 
             VALUES('$nombre_completo', '$Correo' , '$Usuario', '$Contrasena')";

     //Validaciones para no tener datos repetidos
     $Validador_Correo = mysqli_query($conexion, "SELECT * FROM registrouni WHERE Correo= '$Correo'");
     
     if(mysqli_num_rows($Validador_Correo) > 0){
         echo '
            <script>
                alert("Correo registrado anteriormente, por favor ingresa otro correo distinto");
                window.location = "../index.php";
                </script>
            </script>
         ';
         exit();
     }

     $Validador_Usuario = mysqli_query($conexion, "SELECT * FROM registrouni WHERE Usuario= '$Usuario'");
     
     if(mysqli_num_rows($Validador_Usuario) > 0){
         echo '
            <script>
                alert("Usuario registrado anteriormente, por favor ingresa otro Usuario distinto");
                window.location = "../index.php";
                </script>
            </script>
         ';
         exit();
     }
             
    $ejecutar = mysqli_query($conexion, $query);
    
    if($ejecutar){
        echo '
            <script>
                alert("Registro exitoso. BIENVENID@ =)");
                window.location = "../index.php";
            </script>
            ';
    }else{
        echo '
            <script>
                alert("Algo salio mal con tu registro, por favor intentalo nuevamente =(");
                window.location = "../index.php";
            </script>
            ';
    }

    mysqli_close($conexion);
?>