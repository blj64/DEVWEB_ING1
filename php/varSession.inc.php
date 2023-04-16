<?php
session_start();

//unset($_SESSION['loaded']);
if (!isset($_SESSION['loaded']))
{
    $json_file = '../data/products.json';
    $json_str = file_get_contents($json_file);
    $_SESSION["produits"] = json_decode($json_str, true);

    $temp = array("panier" => 0);
    foreach($_SESSION["produits"] as &$type)
    {
        foreach($type as &$produit)
        {
            $produit["panier"] = 0;
        }
    }
    
    $_SESSION["panier"] = array(
        array()
    );
    //pour ne pas reappeler 
    $_SESSION['loaded'] = true;
}

?>
