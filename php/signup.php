<?php
include "header.php";
?>

<section id="main-section">

	<div class="container">
		<?php
		if ($_GET["error"]) {
			echo "<div class=error> Identifiant ou mot de passe erroné <br/></div>";
		}
		?>
		<!-------------------------------->
		<form class="login" action="/index.php" method="POST">
			<div class="login__field">
				<i class="login__icon fas fa-user"></i>
				<input type="text" name="login" placeholder="Username" class="login__input">
			</div>
			<div class="login__field">
				<i class="login__icon fas fa-lock"></i>
				<input type="password" name="password" placeholder="Password" class="login__input">
			</div>
			<input class="login__submit" type="submit" value="Connexion">

		</form>

		<!---here----------------------------->
		<div class="social-login">


			<div class="social-icons">
				<div class="#">
					<div id="logo-rockhub">
						<div>Rock</div>
						<div id="orange">Hub</div>
					</div>
				</div>


			</div>
		</div>



	</div>

</section>
<?php
include "footer.php";
?>