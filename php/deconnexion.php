<?php
    session_start();
    mysqli_close($_SESSION["cnx"]);
    session_destroy();
    header('Location: /php/connexion.php');
    exit();
?>