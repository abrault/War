<?php
include("adm/identifiant.php");

if (isset($_POST['login']) && isset($_POST['pass']))
{
	$login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
	$pass = mysql_real_escape_string(htmlspecialchars($_POST['pass']));
	if ($login == "" || $pass == "")
	{
		?><script>document.location.href="index.php"</SCRIPT><?php
	}
	else
	{
		$link = mysql_connect($db_adr, $db_user, $db_pass);
		if (!$link) {
		    die('Connexion impossible : ' . mysql_error());
		}
		mysql_select_db($db_name, $link) or die('Could not select database.');
		$sql = "SELECT * FROM account WHERE login='$login' AND password='$pass'";
		$req = mysql_query($sql) or die("Erreur : sql = $sql".mysql_error());
		$data = mysql_fetch_array($req);
		if ($data[0] == 1)
		{
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['game'] = $data['victoire'] + $data['defaite'];
			$_SESSION['victoire'] = $data['victoire'];
			$_SESSION['defaite'] = $data['defaite'];
			$_SESSION['cote'] = $data['cote'];
			?><script>document.location.href="index.php"</SCRIPT><?php
		}
		else
		{
			?><script>alert("Mauvais login ou mot de passe !");document.location.href="index.php"</SCRIPT><?php
		}
		mysql_close($link);
	}
}
?>