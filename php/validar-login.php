<?php
    include('basedatos.php');
    $usuario =  $_POST['usuario'];
    $clave =  $_POST['clave'];

    $verificacion = mysqli_query($conn, "SELECT * FROM usuario WHERE usuario ='$usuario' and clave = '$clave'");

    $fila = mysqli_num_rows($verificacion);

    if ($fila > 0) {
        session_start();
        $_SESSION['cliente'] = $usuario;


        header("Location: ../validar-roles.php");
    } else {
        echo'
            <script>
                alert("No existes compa !!!");
                location.href = "../login.php";
            </script>
        ';
    }
    
?>