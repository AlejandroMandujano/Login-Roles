<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-3">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Tipo Usuario</th>
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
            <td><?php echo $row['tipo_usuario']; ?></td>
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
    <a href="panel_invitado.php">Panel de control</a>
  </div>
  
</main>

<?php include('includes/footer.php'); ?>
