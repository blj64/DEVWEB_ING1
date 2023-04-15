<?php
session_start();

//$_SESSION['login'] = $_POST['login'];
//echo "compte de ".$_SESSION['login']."";

$_SESSION["test"] = "okayyyyy";

$_SESSION["produits"] = array(
    "song" => [],
    "playlist" => [],
    "merch" => []
);

if (($handle = fopen("../csv/products.csv", "r")) !== FALSE) {
    while ((($data = fgetcsv($handle, 1000, ";")) !== FALSE)) {
        if ($data[0] == "song" or $data[0] == "playlist" or $data[0] == "merch")
        {
            $temp = array(
                "name" => $data[1],
                "complement" => $data[2],
                "stock" => $data[3],
                "cover" => $data[4],
                "id" => $data[5]
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
    array(
        'apercu' => 'apercuuu',
        'type' => 'typex',
        'reference' => 'ref',
        'quantite' => 8,
        'prix' => 4.5
    ),
    array(
        'apercu' => '2222',
        'type' => 'typey',
        'reference' => 'ref2',
        'quantite' => 23,
        'prix' => 6.9
    )
);



/*
$_SESSION["produits"] = array (
    "song" => array(
        array(
            "name" => "Radio Song",
            "complement" => "Superbus",
            "stock" => 10,
            "cover" => "img1.jpeg",
            "id" => "superbus"
        ),
        array(
            "name" => "L'Aventurier",
            "complement" => "Indochine",
            "stock" => 20,
            "cover" => "img2.jpeg",
            "id" => "indochine"
        ),
        array(
            "name" => "L'Homme pressé",
            "complement" => "Noir Desir",
            "stock" => 15,
            "cover" => "img3.jpeg",
            "id" => "NoirDesir"
        ),
        array(
            "name" => "J't'emmène au vent",
            "complement" => "Louise Attaque",
            "stock" => 5,
            "cover" => "louiseattaque.jpeg",
            "id" => "LouiseAttaque"
        ),
        array(
            "name" => "Lèche-bottes blues",
            "complement" => "Eddy Mitchell",
            "stock" => 30,
            "cover" => "eddy.jpeg",
            "id" => "EddyMitchell"
        )
    ),
    "playlist" => array(
        array(
            "name" => "100% Desert Rock",
            "complement" => "Stoner",
            "stock" => 12,
            "cover" => "desertRock.jpeg",
            "id" => "stoner"
        ),
        array(
            "name" => "100% Rock Français",
            "complement" => "Rock",
            "stock" => 30,
            "cover" => "rockfr.jpeg",
            "id" => "RockFrancais"
        ),
        array(
            "name" => "100% Acoustic",
            "complement" => "Solo",
            "stock" => 15,
            "cover" => "acoustic.jpeg",
            "id" => "solo"
        ),
        array(
            "name" => "100% Métal Industriel",
            "complement" => "Métal",
            "stock" => 55,
            "cover" => "metalindus.jpeg",
            "id" => "metal"
        ),
        array(
            "name" => "100% Rock Californien",
            "complement" => "Rock",
            "stock" => 20,
            "cover" => "californianrock.jpeg",
            "id" => "RockCalifornien"
        )
    ),
    "merch" => array(
        array(
            "name" => "SuperBus T-Shirt",
            "complement" => "XS to XXL",
            "stock" => 15,
            "cover" => "superbus.png",
            "id" => "superbus"
        ),
        array(
            "name" => "Slomosa T-Shirt",
            "complement" => "XS to XXL",
            "stock" => 20,
            "cover" => "slomosa.png",
            "id" => "slomosa"
        ),
        array(
            "name" => "Red Hot Chili Peppers T-Shirt",
            "complement" => "XS to XXL",
            "stock" => 34,
            "cover" => "rhcp.png",
            "id" => "rhcp"
        ),
        array(
            "name" => "Noir DÃ©sir T-Shirt",
            "complement" => "XS to XXL",
            "stock" => 25,
            "cover" => "noirdesir.png",
            "id" => "NoirDesir"
        ),
        array(
            "name" => "Indochine T-Shirt",
            "complement" => "XS to XXL",
            "stock" => 10,
            "cover" => "indochine.png",
            "id" => "indochine"
        )
    )
);
*/

?>
