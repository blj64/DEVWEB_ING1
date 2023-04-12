<?php
include "header.php";
if (isset($_GET['category'])) {
    $category=$_GET["category"].".php";
    include (file_exists($category)? $category:include"./songs.php");
    
}


include "footer.php";
?>