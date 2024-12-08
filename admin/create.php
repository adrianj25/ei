<?php include '../Static/connect/db.php'?>
<?php include '../Static/connect/validacion_tipo_usuario.php'?>
<?php include '../includes/header.php'?>
<br><br><br><br>
<article class="entrada">
  <br><br>
  <div class="entrada__imagen">
    <div class="entrada_contenido">
      <?php
        /*Chequeo inicio de sesión en validacion_tipo_usuario*/
        if($rowcheck['tipo'] == 'admin'){
          echo "<h1>Bienvenid@ $usuario</h1>";
      ?>
      <h2>Incorpora servicios</h2><br>
      <form method="POST" name="frm2" id="frm2" action="altaservicios.php">
        <div class="form_container">
          <label for="nombre" class="formulario_label">Nombre del servicio</label><br>
          <input type="text" name="nombre" id="nombre" class="formulario_input">
          <p class="alert alert-danger" id="nombreError" style="display: none;">Solo se permiten caracteres alfabéticos y números</p>
        </div> 
        <br>
        <div class="form_container">
          <label for="precio" class="formulario_label">Precio del servicio</label><br>
          <input type="text" name="precio" id="precio" class="formulario_input">
          <p class="alert alert-danger" id="precioError" style="display: none;">Solo se permiten números y puntos</p>
        </div>                  
        <br>
        <div class="form_container">                    
          <input type="button" value="Registrar servicio" class="formulario_btn" onclick="validacionServicio();">                    
        </div>          
      </form><br>
      <a href="admin.php" class="formulario_btn">Regresar a la página anterior</a>
    </div>
  </div>
</article>
</body>
<script src='../Static/js/validaciones.js'></script>
</html>
<?php
  } else {
    echo "No tienes permisos de administrador.";
  }
?>