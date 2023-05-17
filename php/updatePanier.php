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
            if($produit['id'] == $id and $trouve == false)
            {
                $trouve = true;

                $temp = array(
                    'categorie' => $produit['categorie'],
                    'apercu' => $produit['cover'],
                    'reference' => $produit['name'],
                    'quantite' => $quantite,
                    'prix' => $produit['prix']
                );

                $dejaDansPanier = false;
                $i = 0;
                foreach ($_SESSION["panier"] as $ligne)
                {
                    if (!$dejaDansPanier and $ligne["reference"] == $produit['name'])
                    {
                        //produit deja dans le panier
                        $temp = array(
                            'apercu' => $ligne['apercu'],
                            'reference' => $ligne['reference'],
                            'quantite' => $quantite + $ligne['quantite'],
                            'prix' => $ligne['prix']
                        );
                        $dejaDansPanier = true;
                        $_SESSION["panier"][$i] = $temp;
                    }
                    $i = $i +1;
                }
                
                if (!$dejaDansPanier)
                {
                    array_push($_SESSION["panier"], $temp);
                }

                echo "<br>ajout de id=".$id." pour ". $quantite. " et un prix de ".$temp['prix'];
                echo "il y mtn ". count($_SESSION["panier"])." articles dans le panier ".$_SESSION['panier'][count($_SESSION['panier'])-1]['reference'];
                echo "panier :<br><table>";
            }
        }
    }

if ($trouve)
{
    header('Location: panier.php');
}


?>