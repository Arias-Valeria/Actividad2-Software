<!DOCTYPE html>
<html>
	<head>
		<?php 
			session_start();
			if($_SESSION["login"] == 0){
				header('location: login.php');
			}
		?>

		<title>Page Title</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	</head>
	<body>

		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "intro_software";

			// Create connection
			$conexion = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conexion->connect_error) {
			  die("Connection failed: " . $conexion->connect_error);
			}

			$nombre = $_POST['name'];
			$email = $_POST['email'];
			$fecha_nacimiento = $_POST['fecha_nacimiento'];


			$sql = "INSERT INTO personas (Nombre, Email, Fecha_nacimiento)
			VALUES ('".$nombre."', '".$email."', '".$fecha_nacimiento."')";

			if ($conexion->query($sql) === TRUE) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conexion->error;
			}

			$conexion->close();
		?>

		<div class="container">
			<div class="row">
				<div class="col-sm">
					<div class="text-center">
					  <img src="img/Banner.png" class="img-fluid" alt="Responsive image" width="1000" height="250">
					</div>
				</div>
			</div>
		</div>

		<h1 class="display 1 mt-3 pt-3 text-center">¡Bienvenido!</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<p class="h4 text-center">Gracias por tu subscripción.</p>
					<p class="h6 text-center">Estos son tus datos: </p>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-sm text-center">
					<?php
					

						echo $nombre;
						echo "<br>";
						echo $email;
						echo "<br>";
						echo $fecha_nacimiento;
						echo "<br>";
						echo "<br>";
					?>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-sm">
					<p class="h5 text-center text-justify">Al haber concluido tu subscripción por pago, tendrás acceso a los siguientes conciertos de música que se llevaran a cabo en el WorldWide MusicFestival, el cual tendrá lugar en California, Estados Unidos el 23 de Noviembre de 2077. </p>
				</div>
			</div>
		</div>

		<div class="container">
		  <div class="row">

		    <div data-aos="flip-left" class="col-md-4 mt-3 pt-3" style="background: white">
		      <a data-fancybox="gallery" href="img/otaku.jpg">
		      	<img src="img/otaku.jpg" width="100%">
		      </a>
		    </div>

		    <div data-aos="flip-left" class="col-md-4 mt-3 pt-3" style="background: white">
		      <a data-fancybox="gallery" href="img/GoodVibes.jpg">
		      	<img src="img/GoodVibes.jpg" width="100%">
		      </a>
		    </div>

		    <div data-aos="flip-left" class="col-md-4 mt-3 pt-3" style="background: white">
		      <a data-fancybox="gallery" href="img/Overdose.jpg">
		      	<img src="img/Overdose.jpg" width="100%">
		      </a>
		    </div>

		  </div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm mt-3 pt-3">
					<p class="h6 text-center text-justify font-italic">(Para más información sobre el WorldWide MusicFestival y cómo obtener los pases de acceso Premium y Platino, visita nuestra pagina www.Cyberpunk2077/MusicFestivalForYou/pases.com)</p>
				</div>
			</div>
		</div>

		<!-- FancyBox -->
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	</body>
</html>