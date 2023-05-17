<?php
    session_start();
    session_destroy();
    header('Location: /php/connexion.php');
    exit();
?>