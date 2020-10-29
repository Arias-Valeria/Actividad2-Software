<!DOCTYPE html>
<html>
<head>
	<?php
		include 'validar_login.php';
	?>
	<title>Inicio</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm">
			<h1 class="text-center mt-3 pt-3">Actividad 2 -- Software</h1>	
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<p class="text-center">Valeria Arias Méndez - Al02813249</p>
			</div>
		</div>
	</div>

	
	<?php date_default_timezone_set('America/Mexico_City'); ?>
	<div class = "container">
		<div class = "row">
			<div class="col-md-12 mt-3 pt-3"> Hola: Valeria - 
				<?php 
					echo date("Y-m-d H:i:s"); 
					echo "<br>";
						?>
					</div>

				<div class="col-md-12">
						<a href="listar_registros.php" style="padding: 10px; border: 1px solid blue; margin:10px; display: inline-block; float: right;">
							<i class="fa fa-list" aria-hidden="true">
							</i> Listado de registros de la BD
						</a>
				</div>

				<div class="col-md-6">
					<form action="procesar_datos.php" method="POST">

						<div class="form-group">
					    	<label for="inputName">Nombre:</label>
					    	<input type="text" class="form-control" id="inputName" name="name">
						</div>

						<div class="form-group">
						    <label for="inputEmail">Email:</label>
						    <input type="text" class="form-control" id="inputEmail" name="email">
						</div>

						<div class="form-group">
						    <label for="inputFechaNacimiento">Fecha de nacimiento:</label>
						    <input type="text" class="form-control calendario" id="inputFechaNacimiento" name="fecha_nacimiento">
						</div>
						 <input type="submit" class="btn btn-primary">
					</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>

	<script type="text/javascript">
		$('.calendario').datepicker({
			format: 'dd-mm-yyyy',
			//startDate: '-0d'
		});
	</script>

</body>
</html>