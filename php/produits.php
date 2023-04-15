<?php
include "header.php";

?>
    <script src="/js/index.js"></script>
<?php
if (isset($_GET['category'])) {
    $category="./".$_GET["category"].".php";
    include (file_exists($category)? $category:include"./songs.php");
    
}


include "footer.php";
?>