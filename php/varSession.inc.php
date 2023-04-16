<?php
session_start();

if (!isset($_SESSION['loaded']))
{
    
    $_SESSION["test"] = "okayyyyy";

    $_SESSION["produits"] = array(
        "song" => [],
        "playlist" => [],
        "merch" => []
    );

    if (($handle = fopen("../data/products.csv", "r")) !== FALSE) {
        while ((($data = fgetcsv($handle, 1000, ";")) !== FALSE)) {
            if ($data[0] == "song" or $data[0] == "playlist" or $data[0] == "merch")
            {
                $temp = array(
                    "name" => $data[1],
                    "complement" => $data[2],
                    "stock" => $data[3],
                    "cover" => $data[4],
                    "id" => $data[5],
                    "panier" => 0,
                    "prix" => $data[6],
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

    //test
    $_SESSION["panier"] = array(
        array()
    );
    //pour ne pas reappeler 
    $_SESSION['loaded'] = true;
}
?>
