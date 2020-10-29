<?php 
	include 'template/header.php'; 
	include 'conexion.php';
	include 'validar_login.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	    $sql = "UPDATE personas SET Nombre ='".$_POST['name']."', Email ='".$_POST['email']."',Fecha_nacimiento ='".$_POST['fecha_nacimiento']."' WHERE id=".$_POST['id_busqueda_form'];
	    if ($conexion->query($sql) === TRUE) {
			if($conexion->affected_rows > 0 ){
				echo "Registro modificado correctamente";
			}
		} else {
		  echo "Error al editar el registro: " . $conexion->error;
		}
	}

	$id_busqueda = $_GET['id'];
	$sql = "SELECT * FROM personas WHERE id = ".$id_busqueda;
	$resultado = $conexion->query($sql);
	if($resultado->num_rows == 1){
		while( $fila = $resultado->fetch_assoc() ){
			$nombre = $fila['Nombre'];
			$email  =  $fila['Email'];
			$fecha_nacimiento = $fila['Fecha_nacimiento'];
		}
	}else{
		echo "El ID no existe en la BD";
	}

	$conexion->close();

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="listar_registros.php" style="padding: 10px; border: 1px solid blue; margin:10px; display: inline-block; float: right;">
				<i class="fa fa-list" aria-hidden="true"></i> Listado de registros de la BD
			</a>
		</div>
		<div class="col-md 6">
					<form action="" method="POST">
				<input type="hidden" name="id_busqueda_form" value="<?php echo $id_busqueda; ?>">
							<div class="form-group">
					    	<label for="inputName">Nombre:</label>
					    	<input type="text" class="form-control" id="inputName" name="name" value="<?php echo $nombre; ?>">
						</div>

						<div class="form-group">
						    <label for="inputEmail">Email:</label>
						    <input type="text" class="form-control" id="inputEmail" name="email" value="<?php echo $email; ?>">
						</div>

						<div class="form-group">
						    <label for="inputFechaNacimiento">Fecha de nacimiento:</label>
						    <input type="text" class="form-control calendario" id="inputFechaNacimiento" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento; ?>">
						</div>
						 <input type="submit" class="btn btn-primary" id="submit-data">
		</div>
	</div>
</div>

</body>
</html>