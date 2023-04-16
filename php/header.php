<?php
session_start();
//header('Location:  varSession.inc.php');
include "varSession.inc.php";
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" type="text/css" href="/css/index.css">

    <title>RockHub</title>
</head>

<body>

    <div id="main-page">
        <header id="header">
            <div id="head-line">
                <div id="head-line-container">You are on the number 1 musical website Never gonna give you up Never gonna let you down Never gonna run around and desert you... </div>


            </div>
            <div id="connection-div">
                <?php
                if (isset($_SESSION["login"])) {
                    echo '<p id="p-msg-welcome">Welcome ' . $_SESSION["nom"] . '</p>';
                    echo '<button class="orange-btn" class="connection-btn" id="logout_button" onclick="window.location.href=\'/php/deconnexion.php\'">Log out</button>';
                } else {
                    echo '<button class="orange-btn" class="connection-btn" id="login_button" onclick="window.location.href=\'/php/connexion.php\'">Log in</button>';
                    echo '<button class="orange-btn" class="connection-btn" id="signup_button" onclick="window.location.href=\'/php/signup.php\'">Sign up</button>';
                }
                ?>
            </div>
            <div id="header-top">
                <h1><span id="white">Rock </span><span id="orange">hub</span></h1>
                <div id="search-bar">
                    <input class="input-bar" type="text" placeholder="Search 5436 music">
                    <div id="search-logo"><img src="../img/loupe.png" alt="O\" height="15" width="20"></div>
                    <a href="/php/panier.php">

                        <div class="orange-btn" id="panier-header">panier</div>
                    </a>
                </div>

            </div>
            <nav>
                <a class="nav-link-a" href="/index.php">
                    <div class="nav-link">HOME</div>
                </a>
                <a class="nav-link-a" href="/php/produits.php?category=songs">
                    <div class="nav-link">SONGS</div>
                </a>
                <a class="nav-link-a" href="/php/produits.php?category=playlists">
                    <div class="nav-link">PLAYLIST</div>
                </a>
                <a class="nav-link-a" href="/php/produits.php?category=merch">
                    <div class="nav-link">MERCH</div>
                </a>
                <!--a class="nav-link-a" href="/php/produits.php?category=goodies">
                    <div class="nav-link">SHOP</div-->
                </a>
                <a class="nav-link-a" href="/php/contact.php">
                    <div class="nav-link">CONTACT</div>
                </a>
            </nav>


        </header>