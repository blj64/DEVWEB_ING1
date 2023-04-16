<?php
include "header.php";
?>

<section id="main-section">

	<div id="connexion">
		<h2>Inscription</h2>
		<?php
		if ($_GET["error"]) {
			echo "<div class=error> Identifiant ou nom non disponible <br/></div>";
		}
		?>
		<!-------------------------------->
		<form class="login" action="/php/signupBack.php" method="POST">
			<div id="login-form">
				<input type="text" name="login" placeholder="Username">
				<input type="text" name="nom" placeholder="Name">
				<input type="password" name="password" placeholder="Password">
				<input type="submit" value="Inscription" id="submit-btn">

			</div>
		</form>

		<!---here----------------------------->


	</div>

</section>
<?php
include "footer.php";
?>

