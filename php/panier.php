<?php
include "header.php";
?>
<section id="main-section">
    <h1>Panier</h1>
    <div id="panier-body">
        <div id="panier-article"></div>
 
                <?php 
                $total = 0;
                if (count($_SESSION["panier"]) == 0)
                {
                    echo "Le panier est vide <br><br>";

                    
                }
                else
                {
                    echo "<table id=\"panier-article-table\">
                        <tr>
                            <th>Apercu</th>
                            <th>Reference</th>
                            <th>Quantité</th>
                            <th>P.U.</th>
                        </tr>";
                    foreach ($_SESSION["panier"] as $ligne)
                    {
                        echo "<tr>";
                        foreach ($ligne as $value)
                        {
                            if ($ligne["apercu"] == $value)
                            {
                                echo "<th><img class=\"small-img-panier\" src=\"../img/".$value."\" height=\"50px\" width=\"50px\" alt=\"cover\"></th>"; 
                            }
                            else
                            {
                                echo "<th>".$value."</th>"; 
                            }
                            
                        }
                        $total = $total + $ligne["quantite"]*$ligne["prix"];
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo "<div id=\"panier-total\">
                    <h2>Total</h2>
                    <span>".$total."€</span>
                    </div>";
                }
        ?>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>