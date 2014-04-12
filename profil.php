<?php
session_start();
?>
<html>
	<?php include("head.php"); ?>
	<body>
			<?php include("barre_membre.php"); ?>
			<div id="contener">
				<table>
						<tr>
						<td>Login</td>
						<td><?php echo $_SESSION['login']?></td>
						</tr>
						<tr>
						<tr>
						<td>Cote classe</td>
						<td><?php echo $_SESSION['cote']?></td>
						</tr>
						<td>Game</td>
						<td><?php echo $_SESSION['game']?></td>
						</tr>
						<tr>
						<td>Victoire</td>
						<td><?php echo $_SESSION['victoire']?></td>
						</tr>
						<tr>
						<td>Defaite</td>
						<td><?php echo $_SESSION['defaite']?></td>
						</tr>
				</table>
			</div>
	</body>
</html>