<?php 
    require_once('bdd.php');
    $newLogin = $_POST['login'];
    $newPassword = $_POST['password'];
    $newName = $_POST['nom'];
    $newUser = array($newName, $newLogin, md5($newPassword));

    //user existe deja dans la bdd
    $exist = userExist($_POST["login"]);
    
    if (!$exist && ($_POST['password'] != "") && ($_POST['nom'] != "") && ($_POST['login'] != "")) {
        $_SESSION["error"] = "existTrue";
        $_SESSION["nom"] = $newName;
        $_SESSION["login"] = $newLogin;
        //ajout a la bdd
        addUser($newUser);
        header('Location: ../index.php');

    }else{
        header('Location: /php/signup.php?error=true');
    }
    
    exit();
?>
