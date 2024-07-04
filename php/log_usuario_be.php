<?php

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_log = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_log) >0){
        $_SESSION['usuario'] = $correo;
        header("location: ../index.php");
        exit();
    }else{
        echo'
            <script>
                alert("Correo o contraseña invalidos, por favor verifique los datos");
                window.location = "../log_reg.php";
            </script>
        ';
        exit();
    }


?>