<?php include '../Static/connect/db.php'?>
<?php include '../Static/connect/validacion_tipo_usuario.php'?>
<?php include '../includes/header.php'?>
<?php
    if($rowcheck['tipo'] == 'admin'){
        $servicio = $_POST['nombre'];
        $precio = $_POST['precio'];

        $sql = " INSERT INTO servicios(id,nombre,precio) VALUES (0,'$servicio',$precio);";

        $execute = mysqli_query($conn,$sql);

        sleep(3);
        header("Location:admin.php");
        echo 'Insercion realizada con exito!';
    }else{
        echo "No tienes permisos de administrador.";
        header("Location: ../reservaciones/reservaciones.php");
    }
?>



<?php  include 'includes/footer.php'; ?>