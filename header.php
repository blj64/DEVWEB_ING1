<?php 
    session_start(); 
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="js/index.js"></script>
    <script src="js/form.js"></script>
    <title>RockHub</title>
</head>
<body>
    
    <div id="main-page"> 
        <header id="header">
            <div id="head-line">
                <div id="head-line-container">You are on the number 1 musical website   Never gonna give you up Never gonna let you down Never gonna run around and desert you</div>


        </div>
        <div id="connection-div">
                <?php
                    if (isset($_SESSION["login"]) && isset($_SESSION["mdp"])) {
                        echo '<button class="connection-btn" id="logout_button" onclick="window.location.href=\'deconnexion.php\'">Log out</button>';
                        echo '<p id="p-msg-welcome">Bienvenue '.$_SESSION["nom"].'</p>';
                    }else{
                        echo '<button class="connection-btn" id="login_button" onclick="window.location.href=\'connexion.php\'">Log in</button>';
                        echo '<button class="connection-btn" id="signup_button" onclick="window.location.href=\'signup.php\'">Sign up</button>';
                    }
                ?>
            </div>
            <div id="header-top">
                <h1><span id="white">Rock </span><span id="orange">hub</span></h1>
                <div id="search-bar">
                    <input class="input-bar" type="text" placeholder="Search 5436 music" >
                    <div id="search-logo"><img src="./img/loupe.png" alt="O\" height="15" width="20"></div>
                    <div id="panier-header" >
                        panier
                    </div>
                </div>
                
            </div>
            <nav>
                <a class="nav-link-a" href="index.php"><div class="nav-link">HOME</div></a>
                <a class="nav-link-a" href="songs.php"><div class="nav-link">SONGS</div></a>
                <a class="nav-link-a" href="playlist.php"><div class="nav-link">PLAYLIST</div></a>
                <a class="nav-link-a" href="goodies.php"><div class="nav-link">MERCH</div></a>
                <a class="nav-link-a" href="contact.php"><div class="nav-link">CONTACT</div></a>
            </nav>

            
        </header>
    