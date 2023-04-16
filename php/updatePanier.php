<?php
session_start();

$id = $_POST['id'];
$quantite = $_POST['quantite'];
echo "id=".$id."|qt=".$quantite;

$trouve = false;
foreach ($_SESSION["produits"] as $type)
    {
        foreach ($type as $produit)
        {
            if($produit['id'] == $id)
            {
                $temp = array(
                    'apercu' => $produit['cover'],
                    'type' => "typ",
                    'reference' => $produit['name'],
                    'quantite' => $quantite,
                    'prix' => $produit['prix']
                );
                $trouve = true;
                echo "<br>ajout de id=".$id." pour ". $quantite. " et un prix de ".$temp['prix'];
                array_push($_SESSION['panier'], $temp);
                echo "il y mtn ". count($_SESSION['panier'])." articles dans le panier ".$_SESSION['panier'][count($_SESSION['panier'])-1]['reference'];
                
            }
        }
    }

if ($trouve)
{
    //header('Location: /php/panier.php');
}


?>