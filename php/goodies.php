
        <section id="main-section">
            
            <div id="merch">
                <?php 
                session_start();
                
                foreach ($_SESSION["produits"]["merch"] as $merch)
                {
                    echo "
                        <div class=\"merch\" data-reference=\"".$merch['id']."\" id=\"merch-".$merch['id']."\">
                        <img class=\"merch-img\" data-reference=\"".$merch['id']."\" id=\"merch-img-".$merch['id']."\" src=\"../img/".$merch['cover']."\" height=\"200px\" width=\"200px\" alt=\"\">
                        <h2 class=\"merch-name\" data-reference=\"".$merch['id']."\" id=\"merch-name-".$merch['id']."\">".$merch['name']."</h2>
                        <h3 class=\"merch-price\" data-reference=\"".$merch['id']."\" id=\"merch-price-".$merch['id']."\">".$merch['prix']."€</h3>
                        <h3 class=\"merch-artist\" data-reference=\"".$merch['id']."\" id=\"merch-artist-".$merch['id']."\">".$merch['complement']."</h3>
                        
                        <div class=\"quantity\" data-reference=\"".$merch['id']."\" id=\"quantity-".$merch['id']."\">
                            <button class=\"quantity-less\" data-reference=\"".$merch['id']."\" id=\"quantity-less-".$merch['id']."\" onclick=\"decrementer('".$merch['id']."')\">-</button>
                            <span class=\"quantity-number\" min=\"0\" max=\"".$merch['stock']."\" data-reference=\"".$merch['id']."\" id=\"quantity-number-".$merch['id']."\" type=\"number\">".$merch['panier']."</span>
                            <button class=\"quantity-more\" data-reference=\"".$merch['id']."\"  id=\"quantity-more-".$merch['id']."\" onclick=\"incrementer('".$merch['id']."','".$merch['stock']."')\">+</button>
                        </div>

                        <button class=\"buy\" data-reference=\"".$merch['id']."\" id=\"buy-".$merch['id']."\" onclick=\"ajouterQuantitePanier('".$merch['id']."')\">Ajouter au panier</button>

                 </div>";
  
                }

                
                ?>

                

            </div>
        </section>
      
