<?php
session_start();
if(empty($_SESSION["cliente"])){
    header("Location: ./../login.php");
}else{
    include("./../php/res-admin.php");
}

include('db.php');

if (isset($_POST['guardar_usuario'])) {
  $nombre = $_POST['nombre'];
  $apellido_paterno = $_POST['apellido_paterno'];
  $apellido_materno = $_POST['apellido_materno'];
  $correo = $_POST['correo'];
  $clave = $_POST['clave'];
  $tipo_usuario = $_POST['tipo_usuario'];
  $query = "INSERT INTO usuario (nombre, apellido_paterno, apellido_materno, usuario, clave, tipo_usuario) 
                        VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$correo', '$clave', '$tipo_usuario')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Algo fallo... Sorry");
  }

  $_SESSION['message'] = 'Usuario guardado con exito !!!';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
