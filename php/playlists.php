

        <section id="main-section">
            
            <div id="playlist">

                <?php 
                session_start();
        
                foreach ($_SESSION["produits"]["playlists"] as $playlist)
                {
                    echo "
                    <div class=\"playlist\" data-reference=\"".$playlist['id']."\" id=\"playlist-".$playlist['id']."\">
                        <img class=\"playlist-img\" data-reference=\"".$playlist['id']."\" id=\"playlist-img-".$playlist['id']."\" src=\"../img/".$playlist['cover']."\" height=\"200px\" width=\"200px\" alt=\"\">
                        <h2 class=\"playlist-name\" data-reference=\"".$playlist['id']."\" id=\"playlist-name-".$playlist['id']."\">".$playlist['name']."</h2>
                        <h3 class=\"playlist-price\" data-reference=\"".$playlist['id']."\" id=\"playlist-price-".$playlist['id']."\">".$playlist['prix']."€</h3>
                        <h3 class=\"playlist-artist\" data-reference=\"".$playlist['id']."\" id=\"playlist-artist-".$playlist['id']."\">".$playlist['complement']."</h3>

                        <div class=\"quantity\" data-reference=\"".$playlist['id']."\" id=\"quantity-".$playlist['id']."\">
                            <button class=\"quantity-less\" data-reference=\"".$playlist['id']."\" id=\"quantity-less-".$playlist['id']."\" onclick=\"decrementer('".$playlist['id']."')\">-</button>
                            <span class=\"quantity-number\" min=\"0\" max=\"".$playlist['stock']."\" data-reference=\"".$playlist['id']."\" id=\"quantity-number-".$playlist['id']."\" type=\"number\">".$playlist['panier']."</span>
                            <button class=\"quantity-more\" data-reference=\"".$playlist['id']."\"  id=\"quantity-more-".$playlist['id']."\" onclick=\"incrementer('".$playlist['id']."','".$playlist['stock']."')\">+</button>
                        </div>

                        <button class=\"buy\" data-reference=\"".$playlist['id']."\" id=\"buy-".$playlist['id']."\" onclick=\"ajouterQuantitePanier('".$playlist['id']."')\">Ajouter au panier</button>
                    </div>";
                }

                
                ?>
                

                
            </div>
        </section>
