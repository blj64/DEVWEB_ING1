<?php

function open()
{
    $serveur = 'localhost';
    $user = 'devweb';
    $mdp = 'Devweb1!';
    $bddName = 'RockHub';
    // user : devweb | mdp : Devweb1!
    $bdd = mysqli_connect($serveur, $user, $mdp, $bddName);
    if (mysqli_connect_errno($bdd)) 
    {
        $bdd = false;
    };

    return $bdd;
}

function init($bdd)
{
    //detruire et initialiser la bdd et fill
    $query_init = file_get_contents("../sql/init.sql");
    if (mysqli_multi_query($bdd, $query_init)){
		while (mysqli_next_result($bdd)) {
            if (!mysqli_more_results($bdd)) {
                break;
            } 
        }
    }
    else {
        echo "Erreur lors de l'initialisation";
    }
}

function fill($bdd)
{
    $query_fill = file_get_contents("../sql/RockHubData.sql");
    if (mysqli_multi_query($bdd, $query_fill)){
		while (mysqli_next_result($bdd)) {
            if (!mysqli_more_results($bdd)) {
                break;
            }
        }
    }
    else {
        echo "Erreur lors du remplissage";
    }
}

function read($bdd)
{
    $tab = array();
    //remplissage du tableau de session
    $sql = "SELECT * FROM products";
    $result = mysqli_query($bdd, $sql);
    if (mysqli_num_rows($result) > 0) {
        
        $tab = array("songs" => array(),
        "playlists" => array(), "merch" => array());

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($tab[$row["categorie"]],$row);
            
        }
    }

    return $tab;
}
function close($bdd)
{
    $bdd->close();
    echo "closed";
}




?>