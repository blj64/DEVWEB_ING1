<?php
include "header.php";
?>
<section id="main-section">

  <div id="connexion">

    <h2>Log In</h2>
    <?php
    if ($_GET["error"]) {
      echo "<div class=error>Wrong login or password";
    }
    ?>
    <?php echo $_SESSION["error"]; ?>
    <form class="login" action="../index.php" method="POST">
      <div id="login-form">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Connexion" id="submit-btn">
      </div>
    </form>
  </div>

</section>

<?php
include "footer.php";
?>