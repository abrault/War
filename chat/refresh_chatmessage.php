<?php
	include("../adm/identifiant.php");
	$link = mysql_connect($db_adr, $db_user, $db_pass);
	if (!$link) {
	    die('Connexion impossible : ' . mysql_error());
	}
	mysql_select_db($db_name, $link) or die('Could not select database.');
	$sql = "SELECT * FROM chat_history";
	$req = mysql_query($sql) or die("Erreur : sql = $sql".mysql_error());
	while ($data = mysql_fetch_array($req))
	{
		$msg =  $data['time'] . " - " . $data['login'] . " : " . $data['message'] . "</br>";
		$msg = str_replace("\n", "</br>", $msg);
		echo $msg;
	}
	mysql_close($link);
?>