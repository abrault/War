<?php
include("../adm/identifiant.php");
if (isset($_GET['login']) && isset($_GET['message']))
{
	$login = mysql_real_escape_string(htmlspecialchars($_GET['login']));
	$message = htmlentities($_GET['message']);
	$message = str_replace("\n", "</br>", $message);
	$link = mysql_connect($db_adr, $db_user, $db_pass);
	if (!$link) {die('Connexion impossible : ' . mysql_error());}
	mysql_select_db($db_name, $link) or die('Could not select database.');
	$sql = "INSERT INTO chat_history(login, message) VALUES ('$login', '$message')";
	$req = mysql_query($sql) or die("Erreur : sql = $sql".mysql_error());
	mysql_close($link);
	echo $message;
}
else
	echo "KO";
?>