<?php
session_start();
?>
<html>
	<?php include("head.php"); ?>
	<body>
			<?php include("barre_membre.php"); ?>
			<div id="contener" style="text-align: center;">
			<?php
				include("adm/identifiant.php");
				$link = mysql_connect($db_adr, $db_user, $db_pass);
				if (!$link) {
				    die('Connexion impossible : ' . mysql_error());
				}
				mysql_select_db($db_name, $link) or die('Could not select database.');
				$sql = "SELECT * FROM account ORDER BY cote DESC";
				$req = mysql_query($sql) or die("Erreur : sql = $sql".mysql_error());
				while ($data = mysql_fetch_array($req))
				{
					$msg = $data['login'] . " - " . $data['cote'];
					echo "<div class='elem_menu'>$msg</div>";
				}
				mysql_close($link);
			?>
			</div>
	</body>
</html>