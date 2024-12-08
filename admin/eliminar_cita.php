<?php include '../Static/connect/db.php'; ?>
<?php include '../Static/connect/validacion_tipo_usuario.php'?>
<?php include '../includes/header.php'; ?>
<?php
    if($rowcheck['tipo'] == 'admin'){
        echo "<h1>Bienvenido $usuario</h1>";
        if(isset($_GET['Id'])){
            $ID= $_GET['Id'];
            $delete= "DELETE FROM citas WHERE idcitas=$ID;";
            $exec= mysqli_query($conn,$delete);

            
            echo 'Eliminación realizada con exito!';
            sleep(2);
            header("Location:consulta_citas.php");
        }
    }else{
        echo "No tienes permisos de administrador.";
    }
?>

<?php  include '../includes/footer.php'; ?>