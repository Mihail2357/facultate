<?php

	session_start();
	if (isset($_SESSION['id'])) {
		header("Location: index.php");
	}

	require 'includes/head.inc.php';
	require 'includes/header.inc.php';

?>

	<div class="login">
		<div class="container">
			<h1>Sign Up</h1>
			<form method="POST" action="includes/signup.inc.php">
				<input type="text" name="nume" placeholder="Nume"><br>
				<input type="text" name="prenume" placeholder="Prenume"><br>
				<input type="text" name="username" placeholder="Username"><br>
				<input type="password" name="password" placeholder="Parola"><br>
				<input type="submit" value="Sign Up">
			</form>
			<?php
				if (isset($_GET['info']) && $_GET['info'] == 'ok') {
					echo '<p style="text-align: center; color: green; font-size: 20px;">Contul a fost creat cu succes.</p>';
				} else if (isset($_GET['info']) && $_GET['info'] == 'eroare') {
					echo '<p style="text-align: center; color: red; font-size: 20px;">A aparut o eroare.</p>';
				} else if (isset($_GET['info']) && $_GET['info'] == 'exista') {
					echo '<p style="text-align: center; color: red; font-size: 20px;">Usernameul exista deja.</p>';
				}
			?>
		</div>
	</div>

</body>
</html>