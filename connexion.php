<?php
include "header.php";
?>
<section id="main-section">

  <div id="connexion">
    <h2>Login</h2>
    <?php
    if ($_GET["error"]) {
      echo "<div class=error> Identifiant ou mot de passe erroné <br/></div>";
    }
    ?>
    <?php echo $_SESSION["error"]; ?>
    <form class="login" action="index.php" method="POST">

      <div class="login__field">
        <input type="text" name="login" placeholder="Username" class="login__input">
      </div>
      <div class="login__field">
        <input type="password" name="password" placeholder="Password" class="login__input">
      </div>
      <input class="login__submit" type="submit" value="Connexion">

    </form>
  </div>



</section>

<?php
include "footer.php";
?>