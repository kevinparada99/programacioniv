<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: private/modulos/principal.php');
    }else{
        header('location: private/modulos/login.php');
    }


?>