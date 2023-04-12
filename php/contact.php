<?php 
    include "header.php";
?>


        <section id="main-section">
            <section id="main" class="formulaire">
                
                <div class="titre">
                    <img src="../img/contactLogo.png" width="80px" height="80px" alt="lettre">
                    <h2 id="contact-title">Formulaire de contact</h2>
                </div>
                
                <p>Vous pouvez nous contacter en complétant le formulaire ci-dessous</p><br>
                <!-- ?php echo $_SESSION["error"]; ?-->
                <form id="contact-form" action="emailing.php" method="POST" onsubmit="return validerSaisies();"> 
                    <div>
                    <b><label for="name">Name*</label></b><br>
                    <input type="text" id="name" class="input-bar" name="name">
                    <span id="error-name" class="error-message"><?php echo $_SESSION["nameErr"]; ?></span><br>
                    
                    </div>
                  
                    <div>
                      <b><label for="email">Mail*</label></b><br>
                      <input type="text" id="email" class="input-bar" name="email">
                      <span id="error-email" class="error-message"><?php echo $_SESSION["emailErr"]; ?></span><br>
                      
                    </div>
                  
                    <div>
                      <b><label for="genre">Genre</label></b><br>
                      <input type="radio" id="homme" class="input-bar" name="genre" value="homme"><label for="homme">Homme</label>
                      <input type="radio" id="femme" class="input-bar" name="genre" value="femme"><label for="femme">Femme</label><br><br>
                    </div>
                  
                    <div>
                      <b><label for="date-n">Date de naissance</label></b><br>
                      <input type="date" id="date-n" class="input-bar" name="date-n"><br><br>
                    </div>
                    
                    <div>
                      <b><label for="fonction">Fonction</label></b><br>
                      <select name="fonction" id="fonction" class="input-bar">
                        <option value="etudiant">Etudiant</option>
                        <option value="retraite">Retraité</option>
                        <option value="Actif">Actif</option>
                      </select><br><br>
                    </div>
                  
                    <div>
                      <b><label for="sujet">Sujet</label></b><br>
                      <input type="text" id="sujet" class="input-bar" name="sujet"><br><br>
                    </div>
                  
                    <div>
                      <b><label for="message">Contenu*</label></b><br>
                      <textarea cols="50" id="message" class="input-area" name="message"></textarea><br>
                      <span id="error-message" class="error-message"><?php echo $_SESSION["messageErr"]; ?></span><br>
                      
                    </div>
                  
                    <input type="submit" class="orange-button" value="Envoyer"/>
                  </form>
                  <span id="star-contact">* Champs obligatoire</span>
                </section>
            </section>      
    
<?php
  include "footer.php";
?>