<?php include '../Static/connect/db.php'; ?>
<?php include '../Static/connect/validacion_tipo_usuario.php'?>
<?php include '../includes/header.php'; ?>
<br><br><br><br>
<article class="entrada">
  <br><br>
  <div class="entrada__imagen">
    <div class="entrada_contenido">
      <?php
        if($rowcheck['tipo'] == 'admin'){
          echo "<h1>Bienvenido/a $usuario</h1>";
          if(isset($_GET['Id'])){
            $Id= $_GET['Id'];
            $select= "SELECT * FROM citas WHERE idcitas=$Id;";
            $exec= mysqli_query($conn,$select);
            if(mysqli_num_rows($exec)==1){
              $row= mysqli_fetch_array($exec);
              $nombre= $row['nombrecita'];
              $servicio= $row['serviciocita'];
              $fecha= $row['fechacita'];
              $celular= $row['celularcita'];
            }
          }

          if(isset($_POST['actualizar_cita'])){
            $Id= $_GET['Id'];
            $nombre= $_POST['nombre'];
            $servicio= $_POST['servicio'];
            $fecha= $_POST['fecha'];
            $celular= $_POST['celular'];
            $sql= "UPDATE citas SET nombrecita='$nombre', serviciocita='$servicio', fechacita='$fecha', celularcita='$celular' WHERE idcitas=$Id;";
            mysqli_query($conn,$sql);
            header("Location:consulta_citas.php");
          }
      ?>
      <h2>Actualizar citas</h2><br>
      <form id="frm3" name="frm3" method="POST" action="actualizar_cita.php?Id=<?php echo $_GET['Id']; ?>" onsubmit="return validacionCita();">
        <div class="form_container">
          <label for="nombre" class="formulario_label">Nombre del cliente</label><br>
          <input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>" class="formulario_input">
          <p class="alert alert-danger" id="nombreError" style="display: none;">El nombre debe contener solo letras y tener entre 1 y 120 caracteres</p>
        </div><br>
        <div class="form_container">
          <label for="servicio" class="formulario_label">Servicio</label><br>
          <select name="servicio" id="servicio" class="formulario_input">
          <?php
          $query = "SELECT nombre, precio FROM servicios";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='{$row['nombre']}'" . ($row['nombre'] == $servicio ? " selected" : "") . ">{$row['nombre']} - {$row['precio']} MXN</option>";
          }
          ?>
          </select>
        </div><br>
        <div class="form_container">
          <label for="fecha" class="formulario_label">Fecha</label><br>
          <input type="date" name="fecha" id="fecha" value="<?php echo $fecha;?>" class="formulario_input" placeholder="Selecciona una fecha">
          <p class="alert alert-danger" id="fechaError" style="display: none;">La fecha no debe estar vacía</p>
        </div><br>
        <div class="form_container">
          <label for="celular" class="formulario_label">Celular</label><br>
          <input type="text" name="celular" id="celular" value="<?php echo $celular;?>" class="formulario_input">
          <p class="alert alert-danger" id="celularError" style="display: none;">El celular debe contener solo números y tener entre 1 y 45 caracteres</p>
        </div><br>
        <button name="actualizar_cita" class="formulario_btn">Actualizar Cita</button>
      </form><br>
      <a href="consulta_citas.php" class="formulario_btn">Regresar a la página anterior</a>
    </div>
  </div>
</article>
<script src='../Static/js/validaciones.js'></script>
<?php
  } else {
    echo "No tienes permisos de administrador.";
  }
?>
<?php include '../includes/footer.php'; ?>