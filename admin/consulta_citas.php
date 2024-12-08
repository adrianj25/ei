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
                    echo "<h1>Bienvenid@ $usuario</h1>";
                    ?>
                    <table class='table table-dark'width="60%">
                        <thread>
                            <tr>
                                <th>Id de cita</th>
                                <th>Nombre del cliente</th>
                                <th>Servicio reservado</th>
                                <th>Fecha cita</th>
                                <th>Celular registrado</th>
                                <th>Eliminar</th>
                                <th>Actualizar</th>
                            </tr>
                        <thread>
                            <p>Exportar a</p>
                            <a href="../Static/convertirpdf/excel_citas.php"><img src="../Static/img/excel.png"></a>
                            <a href="../Static/convertirpdf/reporte_citas.php"><img src="../Static/img/pdf.png"></a>
                            <br><br>
                            <?php
                                $sql= "SELECT * FROM citas;";
                                $exec= mysqli_query($conn,$sql);
                                while($rows=mysqli_fetch_array($exec)){
                            ?>
                                    <tr>
                                        <th><?php echo $rows ['idcitas']; ?></th>
                                        <th><?php echo $rows ['nombrecita']; ?></th>
                                        <th><?php echo $rows ['serviciocita']; ?></th>
                                        <th><?php echo $rows ['fechacita']; ?></th>
                                        <th><?php echo $rows ['celularcita']; ?></th>
                                        <th><a href="eliminar_cita.php?Id=<?php echo $rows ['idcitas']?>"><img src="../Static/img/Icono_Eliminar.png"></a></th>
                                        <th><a href="actualizar_cita.php?Id=<?php echo $rows ['idcitas']?>"><img src="../Static/img/Icono_Actualizar.png"></a></th>
                                    </tr>
                </div>
            </div>
        </article>
            <?php
                }
            }else{
                echo "No tienes permisos de administrador.";
            }
            ?>
    </table>
    <a href="admin.php" class="formulario_btn">Regresar a la página anterior</a>
<?php  include '../includes/footer.php'; ?>