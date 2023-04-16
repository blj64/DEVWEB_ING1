<?php
include "header.php";
?>
<section id="main-section">


    <h1 id="panier-titre">Shopping bag resume</h1>
    <div id="panier-body">
        <div id="panier-article-table">
            <div id="title-panier">
                <span class='div-small-img-panier'>Preview</span>
                <span class="title-panier-description">Reference</span>
                <span class="title-panier-description">Quantity</span>
                <span class="title-panier-description">Price</span>
            </div>
            <br><br><br>
            <div id="article-panier">
         
                <?php

                $total = 0;
                if (count($_SESSION["panier"]) == 0)
                {
                    echo "Le panier est vide";
                }
                else
                {
                    foreach ($_SESSION["panier"] as $ligne)
                    {
                        echo "<div class='product-panier'>";
                        foreach ($ligne as $value)
                        {
                            if ($ligne["apercu"] == $value)
                            {
                                echo "<div class='div-small-img-panier'><img class=\"small-img-panier\" src=\"../img/".$value."\" height=\"50px\" width=\"50px\" alt=\"cover\"></div>"; 
                            }
                            else
                            {
                                echo "<div class='panier-article-description'>".$value."</div>"; 
                            }
                            
                        }
                        $total = $total + $ligne["quantite"]*$ligne["prix"];
                        echo "</div>";
                    }
                }
                
                ?>
            </div>

            </div>

        <div id="panier-total">
            <h1 id="total">Total     <span id="prix-total"><?php echo $total ?>€</span></h1>
           
            <h3 id="sous-total">Sous total: <span id="sous-prix-total"><?php echo $total*0.8 ?>€</span></h3>
            <a  href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><div id="payment-link" >PAYMENT</div></a>

        </div>
    </div>
</section>

<?php
include "footer.php";
?>