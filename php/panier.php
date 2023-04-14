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
                $panier = array(
                    array(
                        'apercu' => 'apercuuu',
                        'type' => 'typex',
                        'reference' => 'ref',
                        'quantite' => 8,
                        'prix' => 4.5
                    ),
                    array(
                        'apercu' => '2222',
                        'type' => 'typey',
                        'reference' => 'ref2',
                        'quantite' => 23,
                        'prix' => 6.9
                    )
                );

                $_SESSION["panier"] = $panier;
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