
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="index.php"><img src="imagini/grav-logo.png"></a>
		</div>
		<div class="nav">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<?php
					if (!isset($_SESSION['id'])) {
						echo '<li><a href="signup.php">SIGN UP</a></li>';
					}
				?>
			</ul>
		</div>
	</div>
</div>