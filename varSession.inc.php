<?php
session_start();

$_SESSION['login'] = $_POST['login'];
echo "compte de ".$_SESSION['login']."";
?>
