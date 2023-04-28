<?php
session_start();

if (!isset($_SESSION['loaded']))
{

    // user : devweb | mdp : Devweb1!
    $_SESSION["cnx"] = mysqli_connect('localhost','devweb','Devweb1!','RockHub');
    if (mysqli_connect_errno($_SESSION["cnx"])) 
    {
        die("Connection failed: " . mysqli_connect_error());
    };

    $query = "SELECT * From users";
    $res = mysqli_query($_SESSION["cnx"], $query) or die('Request error : '.$req);
    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
            $_SESSION["products"][$row['categorie']] = array();
            echo $row['nom']." ".$row['mdp'];
        }
    }else {
        echo "No results";
    }



    
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

    $_SESSION['loaded'] = true;
}

?>
