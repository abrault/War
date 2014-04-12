<?php
$error = 0;
if (isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['repass']))
{
	$login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
	$pass = mysql_real_escape_string(htmlspecialchars($_POST['pass']));
	$repass = mysql_real_escape_string(htmlspecialchars($_POST['repass']));
	if ($login == "" || $pass == "" || $repass == "")
	{
		$error = 1;
	}
	else
	{
		if ($pass == $repass)
		{
			include("adm/identifiant.php");
			if (isset($_POST['login']) && isset($_POST['pass']))
			{
				$link = mysql_connect($db_adr, $db_user, $db_pass);
				if (!$link) {
				    die('Connexion impossible : ' . mysql_error());
				}
				mysql_select_db($db_name, $link) or die('Could not select database.');
				$sql = "SELECT id FROM account WHERE login='$login' AND password='$pass'";
				$req = mysql_query($sql) or die("Erreur : sql = $sql".mysql_error());
				$data = mysql_fetch_array($req);
				if ($data['id'])
				{
					$error = 3;
				}
				else
				{
					$sql = "INSERT INTO account(login, password) VALUES ('$login', '$pass')";
					mysql_query($sql) or die("Erreur : sql = $sql".mysql_error());
					$error = -1;
				}
				mysql_close($link);
			}
		}
		else
		{
			$error = 2;
		}
	}
}
?>

<html>
	<?php include("head.php"); ?>
	<body>
			<?php include("barre_membre.php"); ?>
			<form id="inscription" method="post" action="inscription.php">
				<input class="input_ins" type="text" placeholder="Login" name="login">
				<input class="input_ins" type="password" placeholder="Password" name="pass">
				<input class="input_ins" type="password" placeholder="Retaper le password" name="repass">
				<input type="submit" class="boutton_ins" value="Inscription !">
				<?php
					if ($error == 1)
					{
						echo "<div class='info_error'>Tous les champs sont requis !</div>";
					}
					elseif ($error == 2)
					{
						echo "<div class='info_error'>Les deux mots de passe ne sont pas identiques !</div>";
					}
					elseif ($error == 3)
					{
						echo "<div class='info_error'>Ce login est deja utilise !</div>";
					}
					elseif ($error == -1)
					{
						echo "<div class='info_succes'>Compte cree avec succes !</div>";
					}
				?>
			</form>
	</body>
</html>