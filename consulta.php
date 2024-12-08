<?php include 'Static/connect/db.php'; ?>
<?php include 'includes/header2.php'; ?>
    <table class='table table-dark'width="60%">
        <thread>
            <tr>
                <th>Id</th>
                <th>Servicio</th>
                <th>Costo</th>
            </tr>
        <thread>
            <?php
                $sql= "SELECT * FROM servicios;";
                $exec= mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_array($exec)){
            ?>
                    <tr>
                        <th><?php echo $rows ['Id']; ?></th>
                        <th><?php echo $rows ['nombre']; ?></th>
                        <th><?php echo $rows ['precio']; ?></th>
                    </tr>
            <?php
                }
            ?>
    </table>
<?php  include 'includes/footer.php'; ?>