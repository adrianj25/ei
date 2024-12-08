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
                        if(isset($_GET['Id'])){
                            $Id= $_GET['Id'];
                            $select= "SELECT * FROM servicios WHERE Id=$Id;";
                            $exec= mysqli_query($conn,$select);
                            if(mysqli_num_rows($exec)==1){
                                $row= mysqli_fetch_array($exec);
                                $nombre= $row['nombre'];
                                $precio= $row['precio'];
                            }
                        }

                        if(isset($_POST['actualizar'])){
                            $Id= $_GET['Id'];
                            $nombre= $_POST['nombre'];
                            $precio= $_POST['precio'];
                            $sql= "UPDATE servicios SET nombre='$nombre', precio='$precio' where Id=$Id;";
                            mysqli_query($conn,$sql);
                            header("Location:consulta_plus.php");
                        }
                ?>
                <h2>Actualización de servicios</h2>
                <form name="frm2" id="frm2" action="actualizar.php?Id=<?php echo $_GET['Id']; ?>" method="POST" onsubmit="return validacionServicio();">
                    <div class="form_container">
                        <label>Nombre del servicio</label><br>
                            <Input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>" class="formulario_input">
                            <p class="alert alert-danger" id="nombreError" style="display: none;">Solo se permiten caracteres alfabéticos y números</p>
                    </div><br>
                    <div class="form_container">
                        <label>Precio del servicio</label><br>
                            <Input type="text" name="precio" id="precio" value="<?php echo $precio;?>" class="formulario_input">
                            <p class="alert alert-danger" id="precioError" style="display: none;">Solo se permiten números y puntos</p>
                    </div>
                    <br><br>
                    <Button name="actualizar" class="formulario_btn">Actualizar servicio</button>
                </form>
                <a href="consulta_plus.php" class="formulario_btn">Regresar a la página anterior</a>
                </div>
            </div>
        </article>
        <script src='../Static/js/validaciones.js'></script>
<?php
    }else{
        echo "No tienes permisos de administrador.";
    }
?>
<?php  include '../includes/footer.php'; ?>