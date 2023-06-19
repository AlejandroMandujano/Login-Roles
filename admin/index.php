<?php
session_start();
if(empty($_SESSION["cliente"])){
    header("Location: ./../login.php");
}else{
    include("./../php/res-admin.php");
}

?>


<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-3">
  <div class="row">
    <div class="col-md-3 p-1" >


      <!-- Inicia el formulario-->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="apellido_paterno" class="form-control" placeholder="Apellido Paterno" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="apellido_materno" class="form-control" placeholder="Apellido Materno" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="correo" class="form-control" placeholder="Correo" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="clave" class="form-control" placeholder="Contraseña" autofocus>
          </div>
          <div class="form-group">
            <select class="form-control" aria-label="Default select example" name="tipo_usuario" required>
                <option selected value="">Tipo usuario</option>
                <?php
                  $variale = mysqli_query($conn, "SELECT * FROM tipo_usuario");
                  while($tipo_usuario = mysqli_fetch_row($variale)){
                ?>
                <option value="<?php echo $tipo_usuario[0] ?>"><?php echo $tipo_usuario[1]?></option>
                <?php } ?>
            </select>
          </div>
          <input type="submit" name="guardar_usuario" class="btn btn-success btn-block" value="Guardar Usuario">
        </form>
      </div><!--Termina el formulario-->
    </div>
    <div class="col-md-9">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Tipo Usuario</th>
            <th>Aciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "select id_usuario, u.nombre, u.apellido_paterno, u.apellido_materno, u.usuario, u.clave, tu.nombre_tipoUsuario as tipo_usuario
                          from usuario as u inner JOIN tipo_usuario as tu on u.tipo_usuario = tu.tipo_usuario;";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido_paterno']; ?></td>
            <td><?php echo $row['apellido_materno']; ?></td>
            <td><?php echo $row['usuario']; ?></td>
            <td><?php echo $row['clave']; ?></td>
            <td><?php echo $row['tipo_usuario']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id_usuario']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id_usuario']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <div>
    <a href="../php/cerrar.php">Cerrar Sesion</a>
  </div>
  <div>
    <a href="panel_admin.php">Panel de control</a>
  </div>
  
</main>

<?php include('includes/footer.php'); ?>
