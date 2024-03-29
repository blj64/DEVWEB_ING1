
<section id="main-section">
    <script>
        function loadSong() {
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "/php/loadProducts.php")
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("songs").innerHTML += this.responseText;
                }
            };
            xhttp.send();
        }
    </script>

    <div id="songs"> 
        <?php 


        foreach ($_SESSION["produits"]["songs"] as $song)
        {
            echo "
            <div class=\"song\" data-reference=\"".$song['id']."\" id=\"song-".$song['id']."\">
                <img class=\"song-img\" data-reference=\"".$song['id']."\" id=\"song-img-".$song['id']."\" src=\"../img/".$song['cover']."\" height=\"200px\" width=\"200px\" alt=\"\">
                <h2 class=\"song-name\" data-reference=\"".$song['id']."\" id=\"song-name-".$song['id']."\">".$song['name']."</h2>
                <h3 class=\"song-price\" data-reference=\"".$song['id']."\" id=\"song-price-".$song['id']."\">".$song['prix']."€</h3>
                <h3 class=\"song-artist\" data-reference=\"".$song['id']."\" id=\"song-artist-".$song['id']."\">".$song['complement']."</h3>

                <div class=\"quantity\" data-reference=\"".$song['id']."\" id=\"quantity-".$song['id']."\">
                    <button class=\"quantity-less\" data-reference=\"".$song['id']."\" id=\"quantity-less-".$song['id']."\" onclick=\"decrementer('".$song['id']."')\">-</button>
                    <span class=\"quantity-number\" min=\"0\" max=\"".$song['stock']."\" data-reference=\"".$song['id']."\" id=\"quantity-number-".$song['id']."\" type=\"number\">".$song['panier']."</span>
                    <button class=\"quantity-more\" data-reference=\"".$song['id']."\"  id=\"quantity-more-".$song['id']."\" onclick=\"incrementer('".$song['id']."','".$song['stock']."')\">+</button>
                </div>
                
                <button class=\"buy\" data-reference=\"".$song['id']."\" id=\"buy-".$song['id']."\" onclick=\"ajouterQuantitePanier('".$song['id']."')\">Ajouter au panier</button>
            </div>";
        }

        
        ?>

    </div>
    <button id="loadBtn" onclick="loadSong()">Charger plus</button>

</section>

