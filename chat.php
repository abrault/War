<?php
session_start();
?>
<html>
	<?php include("head.php"); ?>

	<script type="text/javascript">

	function refresh_chatuser()
	{
		$.ajax({ type: "GET", url: "chat/refresh_chatuser.php", data: "action=refresh", success: function(msg){ document.getElementById("list_co").innerHTML = msg; } });
		setTimeout("refresh_chatuser()", 1000);
	}

	function refresh_chatmessage()
	{
		$.ajax({ type: "GET", url: "chat/refresh_chatmessage.php", data: "action=refresh", success: function(msg){ document.getElementById("chat_message").innerHTML = msg; } });
		setTimeout("refresh_chatmessage()", 1000);
	}

	function add_chatuser()
	{
		var login = document.getElementById("login").value;
		$.ajax({
			type: "GET",
			url: "chat/add_chatuser.php",
			data: "login="+login,
			success: function(msg){}
		});
	}

	function remove_chatuser()
	{
		var login = document.getElementById("login").value;
		$.ajax({
			type: "GET",
			url: "chat/del_chatuser.php",
			data: "login="+login,
			success: function(msg){
				add_chatuser();
			}
		});
	}

	function envoi()
	{
		var message = document.getElementById("text_chat").value;
		var login = document.getElementById("login").value;
		$.ajax({
			type: "GET",
			url: "chat/send.php",
			data: "message="+message+"&login="+login,
			success: function(msg){}
		});
	}
	refresh_chatmessage();
	refresh_chatuser();
	</script>

	<body onload="remove_chatuser();">
			<?php include("barre_membre.php"); ?>
			<div id="chat">
			<select multiple size="10" id="list_co"></select>
			<div id="chat_message"></div>
			<input id="login" style="display:none" value="<?php echo $_SESSION['login']; ?>">
			<input id="text_chat" value="<?php echo $_SESSION['login']; ?>">
			<span class="boutton_chat" class="boutton_chat">Defier</span>
			<span class="boutton_chat" onclick="envoi()">Envoye</span>
		</div>
	</body>
</html>