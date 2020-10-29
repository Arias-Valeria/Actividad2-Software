<?php 
		session_start();
		if($_SESSION["login"] == 0){
			header('location: login.php');
		}
	?>