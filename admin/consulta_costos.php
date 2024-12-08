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
                                <th>Servicio</th>
                                <th>Costo</th>
                            </tr>
                        <thread>
                            <p>Exportar a</p>
                            <a href="../Static/convertirpdf/excel_costos.php"><img src="../Static/img/excel.png"></a>
                            <a href="../Static/convertirpdf/reporte_costos.php"><img src="../Static/img/pdf.png"></a>
                            <br><br>
                            <?php
                                $sql= "SELECT * FROM servicios;";
                                $exec= mysqli_query($conn,$sql);
                                while($rows=mysqli_fetch_array($exec)){
                            ?>
                                    <tr>
                                        <th><?php echo $rows ['nombre']; ?></th>
                                        <th><?php echo $rows ['precio']; ?></th>
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