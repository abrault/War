<?php
include("../adm/identifiant.php");
if (isset($_GET['login']))
{
	$login = mysql_real_escape_string(htmlspecialchars($_GET['login']));
	$link = mysql_connect($db_adr, $db_user, $db_pass);
	if (!$link) {die('Connexion impossible : ' . mysql_error());}
	mysql_select_db($db_name, $link) or die('Could not select database.');
	$sql = "DELETE FROM membre_co WHERE login='$login'";
	$req = mysql_query($sql) or die("Erreur : sql = $sql".mysql_error());
	mysql_close($link);
	echo "OK";
}
else
	echo "KO";
?>