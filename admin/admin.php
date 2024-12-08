<?php include '../Static/connect/db.php'?>
<?php include '../Static/connect/validacion_tipo_usuario.php'?>
<?php include '../includes/header.php'?>
<br><br><br><br>
        <article class="entrada">
          <br><br>
          <div class="entrada__imagen">
            <div class="entrada_contenido">
              <?php
              /*Chequeo inicio de secion en validacion_tipo_usuario*/
                if($rowcheck['tipo'] == 'admin'){
                  echo "<h1>Bienvenid@ $usuario</h1>";
                ?>
                <br>
                <p class="centrar">
                <a href="create.php"><img src="../Static/img/Icono_Crear.png"></a>|
                <a href="consulta_plus.php"> <img src="../Static/img/Icono_BD.png"></a>|
                <a href="consulta_citas.php"> <img src="../Static/img/Icono_citas.png" width="64" height="64"></a>|
                <a href="consulta_costos.php"> <img src="../Static/img/Icono_dolar.png" width="64" height="64"></a>|
                <a href="../logout.php"> <img src="../Static/img/Icono_Logout.png"></a>
                </p>
                <h4 class="no-margin">Operaciones</h4>
                <br><br>
              <picture>                      
                <img class="centrar" loading="lazy" src="../Static/img/2.jpg" alt="imagen blog"> 
              </picture>
            </div>
          </div>
        </article>
        <?php
      } else {
        header("Location: ../reservaciones/reservaciones.php");
      }
  ?>
  
