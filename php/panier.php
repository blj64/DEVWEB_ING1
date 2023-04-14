<?php
include "header.php";
?>
<section id="main-section">


    <h1>panier</h1>
    <div id="panier-body">
        <div id="panier-article"></div>
        <h2>Article</h2>
        <table id="panier-article-table">
            <tr>
                <th>Apercu</th>
                <th>Type</th>
                <th>Reference</th>
                <th>Quantite</th>
                <th>Prix</th>
            </tr>
            
                <?php
                
                $total = 0;
                
                foreach ($_SESSION["panier"] as $ligne)
                {
                    echo "<tr>";
                    foreach ($ligne as $value)
                    {
                        echo "<th>".$value."</th>"; 
                    }
                    $total = $total + $ligne["quantite"]*$ligne["prix"];
                    echo "</tr>";
                }
                ?>
            

        </table>


        <div id="panier-total">
            <h2>Total</h2>
            <span><?php echo $total ?>€</span>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>