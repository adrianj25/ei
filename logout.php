<?php include 'Static/connect/db.php'?>
<?php include 'Static/connect/header2.php'?>
<?php
    session_start();
    session_destroy();
    header("Location: index.php");
?>