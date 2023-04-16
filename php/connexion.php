<?php
include "header.php";
?>
<section id="main-section">

  <div id="connexion">

    <h2>Login</h2>
    <?php
    if ($_GET["error"]) {
      echo "<div class=error> Identifiant ou mot de passe erroné";
    }
    ?>
    <?php echo $_SESSION["error"]; ?>
    <form class="login" action="../index.php" method="POST">
      <div id="login-form">
        <input type="text" name="login" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Connexion" id="submit-btn">
      </div>
    </form>
  </div>



</section>

<?php
include "footer.php";
?>