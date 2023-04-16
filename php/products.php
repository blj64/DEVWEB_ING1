<?php
include "header.php";
echo "<script src=\"/js/index.js\"></script>";

if (isset($_GET['category'])) {
    
    echo "<section id=\"main-section\"><div id=\"".$_GET['category']."\">";
    foreach ($_SESSION["produits"][$_GET['category']] as $produit)
    {
        echo "
        <div class=\"article\" data-reference=\"".$produit['id']."\" id=\"article-".$produit['id']."\">
            <img class=\"article-img\" data-reference=\"".$produit['id']."\" id=\"article-img-".$produit['id']."\" src=\"../img/".$produit['cover']."\" height=\"200px\" width=\"200px\" alt=\"\">
            <h2 class=\"article-name\" data-reference=\"".$produit['id']."\" id=\"article-name-".$produit['id']."\">".$produit['name']."</h2>
            <h3 class=\"article-price\" data-reference=\"".$produit['id']."\" id=\"article-price-".$produit['id']."\">".$produit['prix']."€</h3>
            <h3 class=\"article-artist\" data-reference=\"".$produit['id']."\" id=\"article-artist-".$produit['id']."\">".$produit['complement']."</h3>

            <div class=\"quantity\" data-reference=\"".$produit['id']."\" id=\"quantity-".$produit['id']."\">
                <button class=\"quantity-less\" data-reference=\"".$produit['id']."\" id=\"quantity-less-".$produit['id']."\" onclick=\"decrementer('".$produit['id']."')\">-</button>
                <span class=\"quantity-number\" min=\"0\" max=\"".$produit['stock']."\" data-reference=\"".$produit['id']."\" id=\"quantity-number-".$produit['id']."\" type=\"number\">".$produit['panier']."</span>
                <button class=\"quantity-more\" data-reference=\"".$produit['id']."\"  id=\"quantity-more-".$produit['id']."\" onclick=\"incrementer('".$produit['id']."','".$produit['stock']."')\">+</button>
            </div>
            
            <button class=\"buy\" data-reference=\"".$produit['id']."\" id=\"buy-".$produit['id']."\" onclick=\"ajouterQuantitePanier('".$produit['id']."')\">Ajouter au panier</button>
        </div>";
    }
    echo "</div></section>";
}

include "footer.php";
?>