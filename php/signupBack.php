<?php 
    $newLogin = $_POST['login'];
    $newPassword = $_POST['password'];
    $newName = $_POST['nom'];
    $newUser = array($newName, $newLogin, md5($newPassword));

    $verif = true;
    if (($handle = fopen("../data/users.csv", "a+")) !== FALSE) {
        while ((($data = fgetcsv($handle, 1000, ";")) !== FALSE) && $verif) {
            if($newLogin == $data[1] || $newName == $data[0]) {
                $verif = false;
                
            }
        }
    }

    
    if ($verif && ($_POST['password'] != "") && ($_POST['nom'] != "") && ($_POST['login'] != "")) {
        fputcsv($handle, $newUser, ";");
        header("Location: /php/connexion.php");
    }else{
        header('Location: /php/signup.php?error=true');

    }
    fclose($handle);
    exit();
?>
