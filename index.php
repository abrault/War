<?php
session_start();
?>
<html>
	<?php include("head.php"); ?>
	<body>
			<?php include("barre_membre.php"); ?>
			<?php
				if (isset($_SESSION['login']))
				{
					?>
						<div id="menu">
							<a href="jouer.php"><div class="elem_menu">Inviter un joueur</div></a>
							<a href="chat.php"><div class="elem_menu">Chat interactif</div></a>
							<a href="classement.php"><div class="elem_menu">Classement</div></a>
						</div>
					<?php
				}
			?>
	</body>
</html>