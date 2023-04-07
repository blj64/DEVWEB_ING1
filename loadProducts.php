<?php
    session_start();
    


    class Product {
        protected string $name;
        protected string $owner;
        protected string $visual_link;


        public function __construct(string $name, string $owner, string $visual_link) {
            $this->name = $name;
            $this->owner = $owner;
            $this->visual_link = $visual_link;
        }

        public function getName() : string {
            return $this->name;
        }
    
        public function getOwner() : string {
            return $this->owner;
        }
    
        public function getVisualLink() : string {
            return $this->visual_link;
        }
    }

    $current_song = isset($_SESSION['current_song']) ? $_SESSION['current_song'] : 1;

    if (($file = fopen("./data2.csv", "r")) !== FALSE) {
        for ($i=0; $i < 1; $i++) { 
            while(($data = fgetcsv($file, 1000  ,";")) !== false) {
                $_SESSION['current_song']++;
                
                $dataRef = "'".$data[0]."-".$data[1]."'";

                echo"
                    <div class='song' data-reference=".$dataRef." id='song-".$data[0]."-".$data[1]."'>
                        <img class='song-img' data-reference=".$dataRef." id='song-img-".$data[0]."-".$data[1]."' src='".$data[2]."' height='200px' width='200px' alt=''>
                        <h2 class='song-name' data-reference=".$dataRef." id='song-name-".$data[0]."-".$data[1]."'>".$data[0]."</h2>
                        <h3 class='song-artist' data-reference=".$dataRef." id='song-artist-".$data[0]."-".$data[1]."'>".$data[1]."</h3>
                        <div class='stock' data-reference=".$dataRef." id='stock-".$data[0]."-".$data[1]."'>
                            <button class='show-stock' data-reference=".$dataRef." id='show-stock-".$data[0]."-".$data[1]."'>stock</button>
                            <div class='stock-number' data-reference=".$dataRef." id='stock-number-".$data[0]."-".$data[1]."'>10</div>
                        </div>
                        <div class='quantity' data-reference=".$dataRef." id='quantity-".$data[0]."-".$data[1]."'>
                            <button class='quantity-less' data-reference=".$dataRef." id='quantity-less-".$data[0]."-".$data[1]."'>-</button>
                            <input class='quantity-number' min='0' data-reference=".$dataRef." id='quantity-number-".$data[0]."-".$data[1]."' type='number' value='0' onkeypress='return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))'>
                            <button class='quantity-more' data-reference=".$dataRef." id='quantity-more-".$data[0]."-".$data[1]."'>+</button>
                        </div>
                        <button class='buy' data-reference=".$dataRef." id='buy-".$data[0]."-".$data[1]."'>+</button>
                    </div>";
                
            }
        }

    }
    fclose($file);


?>