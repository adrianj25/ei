<?php include '../Static/connect/db.php'?>
<?php include '../Static/connect/validacion_tipo_usuario.php'?>
<?php include '../includes/header.php'?>
<br><br><br><br>
        <article class="entrada">
          <br><br>
          <div class="entrada__imagen">
            <div class="entrada_contenido">
              <?php
                      if(($rowcheck['tipo'] == 'admin') || ($rowcheck['tipo'] == 'cliente')){
                        echo "<h1>Bienvenido $usuario</h1>";
                        ?>
                        <h6>Registrar citas</h6><br>
                        <form method="POST" id="frm3" name="frm3" action="altareservaciones.php" onsubmit="return validacionCita();">
                          <div class="form_container">
                            <label for="nombre" class="formulario_label">
                              Nombre del cliente</label><br>
                            <input type="text" name="nombre" id="nombre" class="formulario_input">
                            <p class="alert alert-danger" id="nombreError" style="display: none;">El nombre debe contener solo letras y tener entre 1 y 120 caracteres</p>
                          </div><br>
                          <div class="form_container">
                            <label for="servicio" class="formulario_label">
                            Servicio</label><br>
                            <select name="servicio" id="servicio" class="formulario_input">
                            <?php
                            $query = "SELECT nombre, precio FROM servicios";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                              echo "<option value='{$row['nombre']}'>{$row['nombre']} - {$row['precio']} MXN</option>";
                            }
                            ?>
                            </select>
                          </div><br>
                          <div class="form_container">
                            <label for="fecha" class="formulario_label">
                              Fecha</label><br>
                            <input type="date" name="fecha" id="fecha" class="formulario_input" placeholder="Selecciona una fecha">
                            <p class="alert alert-danger" id="fechaError" style="display: none;">La fecha no debe estar vacía</p>
                          </div><br>
                          <div class="form_container">
                            <label for="celular" class="formulario_label">Celular</label><br>
                            <input type="text" name="celular" id="celular" class="formulario_input">
                            <p class="alert alert-danger" id="celularError" style="display: none;">El celular debe contener solo números y tener entre 1 y 45 caracteres</p>
                          </div>              
                          <br>
                          <div class="form_container">                    
                            <button name="actualizar_cita" class="formulario_btn">Crear Cita</button>
                            <br><br>
                            <p><a href="../logout.php"><input type="button" value="Cerrar sesión" class="formulario_btn"></a></p>                    
                          </div>       
                        </form>
                      </div>
                    </div>
                  </article>
                  <script src='../Static/js/validaciones.js'></script>
          <?php
        } else {
          header("Location: ../login.php");
        }
        ?>
           