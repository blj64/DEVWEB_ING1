<?php
session_start();


if (!isset($_SESSION['loaded']))
{

    $json_file = '../data/products.json';
    $json_str = file_get_contents($json_file);
    $temp = json_decode($json_str, true);
    $_SESSION["produits"] = $temp;
    //$_SESSION["produits"]["song"] = $temp[0];
    //$_SESSION["produits"]["playlist"] = $temp[1];
    //$_SESSION["produits"]["merch"] = $temp[2];


    print_r(array_keys($_SESSION["produits"]["songs"]));
    echo "--------------------<br>";
    foreach($_SESSION["produits"] as $type)
    {
        foreach($type as $produit)
        {
            foreach($produit as $valeur)
            {
                echo $valeur;
            }
            echo "<br>";
        }
        echo "<br>";
    }

    /*
    if (($handle = fopen("../data/products.json", "r")) !== FALSE) {
        while ((($data = fgetcsv($handle, 1000, ";")) !== FALSE)) {
            if ($data[0] == "song" or $data[0] == "playlist" or $data[0] == "merch")
            {
                $temp = array(
                    "name" => $data[1],
                    "complement" => $data[2],
                    "stock" => $data[3],
                    "cover" => $data[4],
                    "id" => $data[5],
                    "prix" => $data[6],
                    "panier" => 0                    
                );
            }
            if ($data[0] == "song") {
                array_push($_SESSION["produits"]["song"], $temp);
            }
            if ($data[0] == "playlist") {
                array_push($_SESSION["produits"]["playlist"], $temp);
            }
            if ($data[0] == "merch") {
                array_push($_SESSION["produits"]["merch"], $temp);
            }

        }
        fclose($handle);
    }
    */

    //test
    $_SESSION["panier"] = array(
        array()
    );
    //pour ne pas reappeler 
    $_SESSION['loaded'] = true;
}

?>
