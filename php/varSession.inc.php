<?php
session_start();

$_SESSION['login'] = $_POST['login'];
echo "compte de ".$_SESSION['login']."";

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

?>
