<?php
session_start();

if (!isset($_SESSION['loaded']))
{
    $serveur = 'localhost';
    $user = 'devweb';
    $mdp = 'Devweb1!';
    $bdd = 'RockHub';
    // user : devweb | mdp : Devweb1!
    $_SESSION["cnx"] = mysqli_connect($serveur, $user, $mdp, $bdd);
    if (mysqli_connect_errno($_SESSION["cnx"])) 
    {
        die("Connection failed: " . mysqli_connect_error());
    };


    //detruire et initialiser la bdd et fill
    $query_init = file_get_contents("../sql/init.sql");
    if (mysqli_multi_query($_SESSION["cnx"], $query_init)){
		while (mysqli_next_result($_SESSION["cnx"])) {
            if (!mysqli_more_results($_SESSION["cnx"])) {
                break;
            }
        }
    }
    else {
        echo "Erreur lors de l'initialisation";
    }

    $query_fill = file_get_contents("../sql/RockHubData.sql");
    if (mysqli_multi_query($_SESSION["cnx"], $query_fill)){
		while (mysqli_next_result($_SESSION["cnx"])) {
            if (!mysqli_more_results($_SESSION["cnx"])) {
                break;
            }
        }
    }
    else {
        echo "Erreur lors du remplissage";
    }




    

    
    $query = "SELECT * From products";
    $res = mysqli_query($_SESSION["cnx"], $query) or die('Request error : '.$req);
    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
            $_SESSION["products"][$row['categorie']] = array();
            echo $row['categorie']." ".$row['mdp'];
        }
    }else {
        echo "No results";
    }
    
    

    /*
    $json_file = '../data/products.json';
    $json_str = file_get_contents($json_file);
    $_SESSION["produits"] = json_decode($json_str, true);

    $temp = array("panier" => 0);
    foreach($_SESSION["produits"] as &$type)
    {
        foreach($type as &$produit)
        {

            
            $produit["panier"] = 0;
            $requete = "INSERT INTO products (name, complement, stock, prix, cover, id, type) 
            VALUES ('".$produit["name"]."', '".$produit['complement']."', '".$produit["stock"]."', '".$produit["prix"]."', '".$produit["cover"]."', '".$produit["id"]."', 'songs')";

            if ($_SESSION["cnx"]->query($requete) === TRUE) {
                echo $requete."\n";
              } else {
                echo "Error: " . $requete . "<br>" . $_SESSION["cnx"]->error;
              }
        }
    }*/
    
    $_SESSION["panier"] = array(
        array()
    );

    //$_SESSION['loaded'] = true;

    $_SESSION["cnx"]->close();
}

?>
