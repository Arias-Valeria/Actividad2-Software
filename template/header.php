<!DOCTYPE html>
<html>
<head>
<title>Mi primer web</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
if(isset($_SESSION["login"])){
if($_SESSION["login"] == 1){ ?>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<span style="float:right; color: blue;">
			Hola: <?php echo $_SESSION['nombre_usuario']; ?> - 
			<?php
				echo date("Y-m-d H:i:s");
				echo "<br>";
			?>
			</span>
			<a href="logout.php">Cerrar sesión</a>
		</div>
	</div>
</div>
<?php 
	}
}
?>



</head>

<body>