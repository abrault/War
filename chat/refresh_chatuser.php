<?php
	include("../adm/identifiant.php");
	$link = mysql_connect($db_adr, $db_user, $db_pass);
	if (!$link) {
	    die('Connexion impossible : ' . mysql_error());
	}
	mysql_select_db($db_name, $link) or die('Could not select database.');
	$sql = "SELECT * FROM membre_co";
	$req = mysql_query($sql) or die("Erreur : sql = $sql".mysql_error());
	while ($data = mysql_fetch_array($req))
	{
		$login = $data['login'];
		echo "<option value='$login'><div class='elem_menu'>$login</div></option>";
	}
	mysql_close($link);
?>