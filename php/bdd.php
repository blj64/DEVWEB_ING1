<?php

session_start();
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
    else
    {
        $tab = NULL;    
    }

    return $tab;
}
function close($bdd)
{
    $bdd->close();
}

function update()
{
    $bdd = open();
    
    foreach ($_SESSION["panier"] as $value)
    {
        $x = 0;
        $res = -1;
        foreach ($_SESSION["produits"][$value["categorie"]] as $v)
        {
            if ($v["name"] == $value["reference"])
            {
                $res = $x;
            }
            $x = $x + 1;
        }
        if ($res != -1)
        {
            $name = $value["reference"];
            $nb = $_SESSION["produits"][$value["categorie"]][$res]["stock"]-$value["quantite"];
            $sql = "UPDATE products SET stock=".$nb." WHERE name='".$name."'";
            
            $result = mysqli_query($bdd, $sql);
            mysqli_free_result($result);
        }
        
    }

    close($bdd);
    //unset($_GET["update"]);
    $_SESSION["panier"] = array();
}

function addUser($user)
{
    $bdd = open();
    $sql = "INSERT INTO users (login, mdp, nom) 
    VALUES ('".$user[1]."', '".$user[2]."','".$user[0]."');";

    $result = mysqli_query($bdd, $sql);
    mysqli_free_result($result);

    close($bdd);
}

function userExist($login)
{
    $bdd = open();
    $sql = "SELECT * FROM users WHERE login='".$login."';";

    $result = mysqli_query($bdd, $sql);
    if (mysqli_num_rows($result) > 0) {
        $res = true;
    }
    else
    {
        $res = false;
    }
    mysqli_free_result($result);

    close($bdd);
    return $res;
}

function check($user)
{
    $statut = false;
    $bdd = open();

    $sql = "SELECT nom FROM users WHERE (login,mdp)=('".$user[0]."','".$user[1]."');";

    $result = mysqli_query($bdd, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["nom"] = $row["nom"];
        $_SESSION["login"] = $user[0];
        $statut = true;
    }
    else
    {
        $statut = false;
    }
    mysqli_free_result($result);

    close($bdd);
    return $statut;
}



?>