<?php
include "header.php";
if (file_exists($_GET['category'])) {
    $category=$_GET["category"].".php";
    include $category;
}else{
    include "./songs.php";
}


include "footer.php";
?>