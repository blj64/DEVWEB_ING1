<?php
session_start();
require_once('bdd.php');
if (!isset($_SESSION['loaded']))
{
    $bdd=open();
    if (!$bdd)
    {
        echo "Erreur lors de l'ouverture de la base de données";
    }
    else
    {
        init($bdd);

        fill($bdd);

        $_SESSION["produits"] = read($bdd);

        $_SESSION["panier"] = array(
            array()
        );
    
        $_SESSION['loaded'] = true;
    
        close($bdd);
    }
    $_SESSION['loaded'] = true;
    
    
}
?>
