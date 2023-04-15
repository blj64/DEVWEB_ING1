

        <section id="main-section">
            
            <div id="playlist">

                <?php 
                session_start();
        
                foreach ($_SESSION["produits"]["playlist"] as $playlist)
                {
                    echo "
                    <div class=\"playlist\" data-reference=\"".$playlist['id']."\" id=\"playlist-".$playlist['id']."\">
                        <img class=\"playlist-img\" data-reference=\"".$playlist['id']."\" id=\"playlist-img-".$playlist['id']."\" src=\"../img/".$playlist['cover']."\" height=\"200px\" width=\"200px\" alt=\"\">
                        <h2 class=\"playlist-name\" data-reference=\"".$playlist['id']."\" id=\"playlist-name-".$playlist['id']."\">".$playlist['name']."</h2>
                        <h3 class=\"playlist-artist\" data-reference=\"".$playlist['id']."\" id=\"playlist-artist-".$playlist['id']."\">".$playlist['complement']."</h3>
                        <div class=\"stock\" data-reference=\"".$playlist['id']."\" id=\"playlist-stock-".$playlist['id']."\">
                            <button class=\"show-stock\" data-reference=\"".$playlist['id']."\" id=\"show-stock-".$playlist['id']."\">stock</button>
                            <div class=\"stock-number\" data-reference=\"".$playlist['id']."\" id=\"stock-number-".$playlist['id']."\">10</div>
                        </div>
                        <div class=\"quantity\" data-reference=\"".$playlist['id']."\" id=\"quantity-".$playlist['id']."\">
                            <button class=\"quantity-less\" data-reference=\"".$playlist['id']."\" id=\"quantity-less-".$playlist['id']."\">-</button>
                            <input class=\"quantity-number\" min=\"0\" data-reference=\"".$playlist['id']."\" id=\"quantity-number-".$playlist['id']."\" type=\"number\" value=\"".$playlist['stock']."\" onkeypress=\"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))\">
                            <button class=\"quantity-more\" data-reference=\"".$playlist['id']."\" id=\"quantity-more-".$playlist['id']."\">+</button>
                        </div>
                        <button class=\"buy\" data-reference=\"".$playlist['id']."\" id=\"buy-".$playlist['id']."\">+</button>
                    </div>";
                }

                
                ?>
                <!-- div class="playlist" data-reference="100%DesertRock-Stoner" id="playlist-100%DesertRock-Stoner">
                    <img class="playlist-img" data-reference="100%DesertRock-Stoner" id="playlist-img-100%DesertRock-Stoner" src="../img/desertRock.jpeg" height="200px" width="200px" alt="">
                    <h2 class="playlist-name" data-reference="100%DesertRock-Stoner" id="playlist-name-100%DesertRock-Stoner">100% Desert Rock</h2>
                    <h3 class="playlist-artist" data-reference="100%DesertRock-Stoner" id="playlist-artist-100%DesertRock-Stoner">Stoner</h3>
                    <div class="stock" data-reference="100%DesertRock-Stoner" id="stock-100%DesertRock-Stoner">
                        <button class="show-stock" data-reference="100%DesertRock-Stoner" id="show-stock-100%DesertRock-Stoner">stock</button>
                        <div  class="stock-number" data-reference="100%DesertRock-Stoner" id="stock-number-100%DesertRock-Stoner">5</div>
                    </div>
                    <div class="quantity" data-reference="100%DesertRock-Stoner" id="quantity-100%DesertRock-Stoner">
                        <button class="quantity-less" data-reference="100%DesertRock-Stoner" id="quantity-less-100%DesertRock-Stoner">-</button>
                        <input class="quantity-number" min="0" data-reference="100%DesertRock-Stoner" id="quantity-number-100%DesertRock-Stoner" type="number" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <button class="quantity-more" data-reference="100%DesertRock-Stoner" id="quantity-more-100%DesertRock-Stoner">+</button>
                    </div>
                    <button class="buy" data-reference="100%DesertRock-Stoner" id="buy-100%DesertRock-Stoner">+</button>
                </div>

                <div class="playlist" data-reference="100%RockFrancais-Rock" id="playlist-100%RockFrancais-Rock">
                    <img class="playlist-img" data-reference="100%RockFrancais-Rock" id="playlist-img-100%RockFrancais-Rock" src="../img/rockfr.jpeg" height="200px" width="200px" alt="">
                    <h2 class="playlist-name" data-reference="100%RockFrancais-Rock" id="playlist-name-100%RockFrancais-Rock">100% Rock Français</h2>
                    <h3 class="playlist-artist" data-reference="100%RockFrancais-Rock" id="playlist-artist-100%RockFrancais-Rock">Rock</h3>
                    <div class="stock" data-reference="100%RockFrancais-Rock" id="stock-100%RockFrancais-Rock">
                        <button class="show-stock" data-reference="100%RockFrancais-Rock" id="show-stock-100%RockFrancais-Rock">stock</button>
                        <div  class="stock-number" data-reference="100%RockFrancais-Rock" id="stock-number-100%RockFrancais-Rock">3</div>
                    </div>
                    <div class="quantity" data-reference="100%RockFrancais-Rock" id="quantity-100%RockFrancais-Rock">
                        <button class="quantity-less" data-reference="100%RockFrancais-Rock" id="quantity-less-100%RockFrancais-Rock">-</button>
                        <input class="quantity-number" min="0" data-reference="100%RockFrancais-Rock" id="quantity-number-100%RockFrancais-Rock" type="number" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <button class="quantity-more" data-reference="100%RockFrancais-Rock" id="quantity-more-100%RockFrancais-Rock">+</button>
                    </div>
                    <button class="buy" data-reference="100%RockFrancais-Rock" id="buy-100%RockFrancais-Rock">+</button>
                </div>

                <div class="playlist" data-reference="100%Acoustic-Solo" id="playlist-100%Acoustic-Solo">
                    <img class="playlist-img" data-reference="100%Acoustic-Solo" id="playlist-img-100%Acoustic-Solo" src="../img/acoustic.jpeg" height="200px" width="200px" alt="">
                    <h2 class="playlist-name" data-reference="100%Acoustic-Solo" id="playlist-name-100%Acoustic-Solo">100% Acoustic</h2>
                    <h3 class="playlist-artist" data-reference="100%Acoustic-Solo" id="playlist-artist-100%Acoustic-Solo">Solo</h3>
                    <div class="stock" data-reference="100%Acoustic-Solo" id="Solo-100%Acoustic-Solo">
                        <button class="show-stock" data-reference="100%Acoustic-Solo" id="show-stock-100%Acoustic-Solo">stock</button>
                        <div  class="stock-number" data-reference="100%Acoustic-Solo" id="stock-number-100%Acoustic-Solo">4</div>
                    </div>
                    <div class="quantity" data-reference="100%Acoustic-Solo" id="quantity-100%Acoustic-Solo">
                        <button class="quantity-less" data-reference="100%Acoustic-Solo" id="quantity-less-100%Acoustic-Solo">-</button>
                        <input class="quantity-number" min="0" data-reference="100%Acoustic-Solo" id="quantity-number-100%Acoustic-Solo" type="number" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <button class="quantity-more" data-reference="100%Acoustic-Solo" id="quantity-more-100%Acoustic-Solo">+</button>
                    </div>
                    <button class="buy" data-reference="100%Acoustic-Solo" id="buy-100%Acoustic-Solo">+</button>
                </div>

                <div class="playlist" data-reference="100%MetalIndus-Metal" id="playlist-100%MetalIndus-Metal">
                    <img class="playlist-img" data-reference="100%MetalIndus-Metal" id="playlist-img-100%MetalIndus-Metal" src="../img/metalindus.jpeg" height="200px" width="200px" alt="">
                    <h2 class="playlist-name" data-reference="100%MetalIndus-Metal" id="playlist-name-100%MetalIndus-Metal">100% Métal Industriel</h2>
                    <h3 class="playlist-artist" data-reference="100%MetalIndus-Metal" id="playlist-artist-100%MetalIndus-Metal">Métal</h3>
                    <div class="stock" data-reference="100%MetalIndus-Metal" id="stock-100%MetalIndus-Metal">
                        <button class="show-stock" data-reference="100%MetalIndus-Metal" id="show-stock-100%MetalIndus-Metal">stock</button>
                        <div  class="stock-number" data-reference="100%MetalIndus-Metal" id="stock-number-100%MetalIndus-Metal">70</div>
                    </div>
                    <div class="quantity" data-reference="100%MetalIndus-Metal" id="quantity-100%MetalIndus-Metal">
                        <button class="quantity-less" data-reference="100%MetalIndus-Metal" id="quantity-less-100%MetalIndus-Metal">-</button>
                        <input class="quantity-number" min="0" data-reference="100%MetalIndus-Metal" id="quantity-number-100%MetalIndus-Metal" type="number" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <button class="quantity-more" data-reference="100%MetalIndus-Metal" id="quantity-more-100%MetalIndus-Metal">+</button>
                    </div>
                    <button class="buy" data-reference="100%MetalIndus-Metal" id="buy-100%MetalIndus-Metal">+</button>
                </div>

                <div class="playlist" data-reference="100%RockCalifornien-Rock" id="playlist-100%RockCalifornien-Rock">
                    <img class="playlist-img" data-reference="100%RockCalifornien-Rock" id="playlist-img-100%RockCalifornien-Rock" src="../img/californianrock.jpeg" height="200px" width="200px" alt="">
                    <h2 class="playlist-name" data-reference="100%RockCalifornien-Rock" id="playlist-name-100%RockCalifornien-Rock">100% Rock Californien</h2>
                    <h3 class="playlist-artist" data-reference="100%RockCalifornien-Rock" id="playlist-artist-100%RockCalifornien-Rock">Rock</h3>
                    <div class="stock" data-reference="100%RockCalifornien-Rock" id="stock-100%RockCalifornien-Rock">
                        <button class="show-stock" data-reference="100%RockCalifornien-Rock" id="show-stock-100%RockCalifornien-Rock">stock</button>
                        <div  class="stock-number" data-reference="100%RockCalifornien-Rock" id="stock-number-100%RockCalifornien-Rock">10</div>
                    </div>
                    <div class="quantity" data-reference="100%RockCalifornien-Rock" id="quantity-100%RockCalifornien-Rock">
                        <button class="quantity-less" data-reference="100%RockCalifornien-Rock" id="quantity-less-100%RockCalifornien-Rock">-</button>
                        <input class="quantity-number" min="0" data-reference="100%RockCalifornien-Rock" id="quantity-number-100%RockCalifornien-Rock" type="number" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <button class="quantity-more" data-reference="100%RockCalifornien-Rock" id="quantity-more-100%RockCalifornien-Rock">+</button>
                    </div>
                    <button class="buy" data-reference="100%RockCalifornien-Rock" id="buy-100%RockCalifornien-Rock">+</button>
                </div-->

                
            </div>
        </section>
