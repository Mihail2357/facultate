<?php



	session_start();

	require 'includes/head.inc.php';
	require 'includes/header.inc.php';

	if (!isset($_SESSION['id'])) {
		echo 
		'
		<div class="login">
			<div class="container">
				<h1>Bine ai venit!</h1>
				<form method="POST" action="includes/login.inc.php">
					<input type="text" name="username" placeholder="Username"><br>
					<input type="password" name="password" placeholder="Parola"><br>
					<input type="submit" value="Log In">
				</form>';
				if (isset($_GET['info']) && $_GET['info'] == 'gresit') {
					echo '<p style="text-align: center; color: red; font-size: 20px;">Parola introdusa este gresita.</p>';
				}
				echo'
			</div>
		</div>
	';
	} else {
		echo '<p style="text-align: center; font-family: Lato; font-size: 35px;padding-top: 100px;">Prenumele meu este '.$_SESSION['prenume'].'!';
		echo '
		<div class="login">
			<form action="includes/logout.inc.php" style="text-align: center;">
				<input type="submit" value="Log Out">
			</form>
		</div>
		';
	}
	
?>

</body>
</html>