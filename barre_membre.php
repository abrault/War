<div id="barre_membre">

<span id="title"><a href="index.php"><img src="images/logo.png" width="110px"></a>Awesome Starships Battles In The Dark Grim Future Of The Grim Dark 41st Millenium</span>
<?php
if (isset($_SESSION['login']))
{
	?>
	<span id="form_co">
		<a href="profil.php" class="boutton">Profil</a>
		<a href="deconnexion.php" class="boutton">Deconnexion</a>
	</span>
	<?php
}
else
{
?>
<form action="login.php" id="form_co" method="post">
	<input class="input" type="text" placeholder="Login" name="login">
	<input class="input" type="password" placeholder="Password" name="pass">
	<input type="submit" class="boutton" value="Connexion">
</form>
<a href="inscription.php" class="boutton" style="float: right">Inscription</a>
<?php
}
?>
</div>