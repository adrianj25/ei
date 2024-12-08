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
                        $nombrec = $_POST['nombre'];
                        $servicioc = $_POST['servicio'];
                        $fechac = date('Y-m-d', strtotime($_POST['fecha']));
                        $celularc = $_POST['celular'];

                        $sql = " INSERT INTO citas(idcitas, nombrecita, serviciocita, fechacita, celularcita) VALUES (0,'$nombrec','$servicioc','$fechac','$celularc');";

                        $execute = mysqli_query($conn,$sql);

                        sleep(3);
                        echo "<h1>$usuario cita creada con exitosamente!</h1>";
                        echo "<h6>Volviendo a la página de reservaciones...</h6>";
                        header("Refresh:5; url=reservaciones.php");
                    }else{
                        header("Location: ../login.php");
                    }
                ?>
            </div>
            </div>
        </article>




<?php  include '../includes/footer.php'; ?>