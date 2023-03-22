<?php 
    include "header.php";
?>
        <section id="main-section">
            
            <div id="songs">
                <div class="song" data-reference="RadioSong-Superbus" id="song-RadioSong-Superbus">
                    <img class="song-img" data-reference="RadioSong-Superbus" id="song-img-RadioSong-Superbus" src="../img/img1.jpeg" height="200px" width="200px" alt="">
                    <h2 class="song-name" data-reference="RadioSong-Superbus" id="song-name-RadioSong-Superbus">Radio Song</h2>
                    <h3 class="song-artist" data-reference="RadioSong-Superbus" id="song-artist-RadioSong-Superbus">Superbus</h3>
                    <div class="stock" data-reference="RadioSong-Superbus" id="stock-RadioSong-Superbus">
                        <button class="show-stock" data-reference="RadioSong-Superbus" id="show-stock-RadioSong-Superbus">stock</button>
                        <div  class="stock-number" data-reference="RadioSong-Superbus" id="stock-number-RadioSong-Superbus">10</div>
                    </div>
                    <div class="quantity" data-reference="RadioSong-Superbus" id="quantity-RadioSong-Superbus">
                        <button class="quantity-less" data-reference="RadioSong-Superbus" id="quantity-less-RadioSong-Superbus">-</button>
                        <input class="quantity-number" min="0" data-reference="RadioSong-Superbus" id="quantity-number-RadioSong-Superbus" type="number" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <button class="quantity-more" data-reference="RadioSong-Superbus" id="quantity-more-RadioSong-Superbus">+</button>
                    </div>
                    <button class="buy" data-reference="RadioSong-Superbus" id="buy-RadioSong-Superbus">+</button>
                </div>
                

                <div class="song" data-reference="LAventurier-Indochine" id="song-LAventurier-Indochine">
                    <img class="song-img" data-reference="LAventurier-Indochine" id="song-img-LAventurier-Indochine" src="../img/img2.jpeg" height="200px" width="200px" alt="">
                    <h2 class="song-name" data-reference="LAventurier-Indochine" id="song-name-LAventurier-Indochine">L'Aventurier</h2>
                    <h3 class="song-artist" data-reference="LAventurier-Indochine" id="song-artist-LAventurier-Indochine">Indochine</h3>
                    <div class="stock" data-reference="LAventurier-Indochine" id="stock-LAventurier-Indochine">
                        <button class="show-stock" data-reference="LAventurier-Indochine" id="show-stock-LAventurier-Indochine">stock</button>
                        <div  class="stock-number" data-reference="LAventurier-Indochine" id="stock-number-LAventurier-Indochine">20</div>
                    </div>
                    <div class="quantity" data-reference="LAventurier-Indochine" id="quantity-LAventurier-Indochine">
                        <button class="quantity-less" data-reference="LAventurier-Indochine" id="quantity-less-LAventurier-Indochine">-</button>
                        <input class="quantity-number" min="0" data-reference="LAventurier-Indochine" id="quantity-number-LAventurier-Indochine" type="number" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <button class="quantity-more" data-reference="LAventurier-Indochine" id="quantity-more-LAventurier-Indochine">+</button>
                    </div>
                    <button class="buy" data-reference="LAventurier-Indochine" id="buy-LAventurier-Indochine">+</button>
                </div>


                <div class="song" data-reference="LHommePresse-NoirDesir" id="song-LHommePresse-NoirDesir">
                    <img class="song-img" data-reference="LHommePresse-NoirDesir" id="song-img-LHommePresse-NoirDesir" src="../img/img3.jpeg" height="200px" width="200px" alt="">
                    <h2 class="song-name" data-reference="LHommePresse-NoirDesir" id="song-name-LHommePresse-NoirDesir">L'Homme pressé</h2>
                    <h3 class="song-artist" data-reference="LHommePresse-NoirDesir" id="song-artist-LHommePresse-NoirDesir">Noir Desir</h3>
                    <div class="stock" data-reference="LHommePresse-NoirDesir" id="stock-LHommePresse-NoirDesir">
                        <button class="show-stock" data-reference="LHommePresse-NoirDesir" id="show-stock-LHommePresse-NoirDesir">stock</button>
                        <div  class="stock-number" data-reference="LHommePresse-NoirDesir" id="stock-number-LHommePresse-NoirDesir">15</div>
                    </div>
                    <div class="quantity" data-reference="LHommePresse-NoirDesir" id="quantity-LHommePresse-NoirDesir">
                        <button class="quantity-less" data-reference="LHommePresse-NoirDesir" id="quantity-less-LHommePresse-NoirDesir">-</button>
                        <input class="quantity-number" min="0" data-reference="LHommePresse-NoirDesir" id="quantity-number-LHommePresse-NoirDesir" type="number" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <button class="quantity-more" data-reference="LHommePresse-NoirDesir" id="quantity-more-LHommePresse-NoirDesir">+</button>
                    </div>
                    <button class="buy" data-reference="LHommePresse-NoirDesir" id="buy-LHommePresse-NoirDesir">+</button>
                </div>

        
                <div class="song" data-reference="JtenmeneAuVent-LouiseAttaque" id="song-JtenmeneAuVent-LouiseAttaque">
                    <img class="song-img" data-reference="JtenmeneAuVent-LouiseAttaque" id="song-img-JtenmeneAuVent-LouiseAttaque" src="../img/louiseattaque.jpeg" height="200px" width="200px" alt="">
                    <h2 class="song-name" data-reference="JtenmeneAuVent-LouiseAttaque" id="song-name-JtenmeneAuVent-LouiseAttaque">J't'emmène au vent</h2>
                    <h3 class="song-artist" data-reference="JtenmeneAuVent-LouiseAttaque" id="song-artist-JtenmeneAuVent-LouiseAttaque">Louise Attaque</h3>
                    <div class="stock" data-reference="JtenmeneAuVent-LouiseAttaque" id="stock-JtenmeneAuVent-LouiseAttaque">
                        <button class="show-stock" data-reference="JtenmeneAuVent-LouiseAttaque" id="show-stock-JtenmeneAuVent-LouiseAttaque">stock</button>
                        <div  class="stock-number" data-reference="JtenmeneAuVent-LouiseAttaque" id="stock-number-JtenmeneAuVent-LouiseAttaque">5</div>
                    </div>
                    <div class="quantity" data-reference="JtenmeneAuVent-LouiseAttaque" id="quantity-JtenmeneAuVent-LouiseAttaque">
                        <button class="quantity-less" data-reference="JtenmeneAuVent-LouiseAttaque" id="quantity-less-JtenmeneAuVent-LouiseAttaque">-</button>
                        <input class="quantity-number" min="0" data-reference="JtenmeneAuVent-LouiseAttaque" id="quantity-number-JtenmeneAuVent-LouiseAttaque" type="number" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <button class="quantity-more" data-reference="JtenmeneAuVent-LouiseAttaque" id="quantity-more-JtenmeneAuVent-LouiseAttaque">+</button>
                    </div>
                    <button class="buy" data-reference="JtenmeneAuVent-LouiseAttaque" id="buy-JtenmeneAuVent-LouiseAttaque">+</button>
                </div>


                <div class="song" data-reference="LecheBottesBlues-Eddy Mitchell" id="song-LecheBottesBlues-Eddy Mitchell">
                    <img class="song-img" data-reference="LecheBottesBlues-Eddy Mitchell" id="song-img-LecheBottesBlues-Eddy Mitchell" src="../img/eddy.jpeg" height="200px" width="200px" alt="">
                    <h2 class="song-name" data-reference="LecheBottesBlues-Eddy Mitchell" id="song-name-LecheBottesBlues-Eddy Mitchell">Lèche-bottes blues</h2>
                    <h3 class="song-artist" data-reference="LecheBottesBlues-Eddy Mitchell" id="song-artist-LecheBottesBlues-Eddy Mitchell">Eddy Mitchell</h3>
                    <div class="stock" data-reference="LecheBottesBlues-Eddy Mitchell" id="stock-LecheBottesBlues-Eddy Mitchell">
                        <button class="show-stock" data-reference="LecheBottesBlues-Eddy Mitchell" id="show-stock-LecheBottesBlues-Eddy Mitchell">stock</button>
                        <div  class="stock-number" data-reference="LecheBottesBlues-Eddy Mitchell" id="stock-number-LecheBottesBlues-Eddy Mitchell">100</div>
                    </div>
                    <div class="quantity" data-reference="LecheBottesBlues-Eddy Mitchell" id="quantity-LecheBottesBlues-Eddy Mitchell">
                        <button class="quantity-less" data-reference="LecheBottesBlues-Eddy Mitchell" id="quantity-less-LecheBottesBlues-Eddy Mitchell">-</button>
                        <input class="quantity-number" min="0" data-reference="LecheBottesBlues-Eddy Mitchell" id="quantity-number-LecheBottesBlues-Eddy Mitchell" type="number" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <button class="quantity-more" data-reference="LecheBottesBlues-Eddy Mitchell" id="quantity-more-LecheBottesBlues-Eddy Mitchell">+</button>
                    </div>
                    <button class="buy" data-reference="LecheBottesBlues-Eddy Mitchell" id="buy-LecheBottesBlues-Eddy Mitchell">+</button>
                </div>

                

            </div>

        </section>

<?php 
    include "footer.php";
?>