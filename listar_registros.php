<?php
include 'validar_login.php';
include 'template/header.php'; 
include 'conexion.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-6" style="margin-top: 20px;">
			<form action="" method="GET"> 
				<div class="form-group">
				    <label for="inputBusqueda">Buscar por nombre:</label>
				    <input type="text" class="form-control" id="inputBusqueda" name="busqueda_nombre" value="<?php 
				    	if(isset($_GET['busqueda_nombre'])){ 
				    		echo $_GET['busqueda_nombre']; 
				    	} ?>">

				    	<label for="inputBusquedaCorreo">Buscar por correo:</label>
				    <input type="text" class="form-control" id="inputBusquedaCorreo" name="busqueda_correo" value="<?php 
				    	if(isset($_GET['busqueda_correo'])){ 
				    		echo $_GET['busqueda_correo']; 
				    	} ?>">


				</div>
				<input type="submit" class="btn btn-primary" id="submit-data">
			</form>
		</div>

		<div class="col-md-12">
			<a href="index.php" style="padding: 10px; border: 1px solid blue; margin:10px; display: inline-block; float: right;">
				<i class="fa fa-list" aria-hidden="true"></i>Regresar al inicio
			</a>
		</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-4 pt-4">
				<table class='table' style='width:100%'>
				  <thead class='thead-dark'>
				  	<tr>
				  		<th>ID</th>
				  		<th>Nombre</th>
				  		<th>Correo</th>
				  		<th>Fecha de nacimiento</th>
				  		<th>Editar</th>
				  		<th>Eliminar</th>
				  	</tr>
				  </thead>
				  <tbody>

				<?php 

				if ($_SERVER['REQUEST_METHOD'] === 'GET'){
					$busqueda_nombre = $_GET['busqueda_nombre'];
					$busqueda_correo = $_GET['busqueda_correo'];
					$sql = "SELECT * FROM personas WHERE Nombre LIKE '%".$busqueda_nombre."%' OR Email LIKE '%".$busqueda_correo."%' ";
				}else{

				$sql = "SELECT * FROM personas";
				}

				$result = $conexion->query($sql);

				if ($result->num_rows > 0) {
					  while($row = $result->fetch_assoc()) {
					  	echo "<tr> <td> " . $row["ID"]. "</td> <td>" . $row["Nombre"]. "</td> <td>" . $row["Email"]. " </td> <td> ". $row['Fecha_nacimiento']. "</td> 
					    <td>
					    	<a href='editar_registros.php?id=".$row["ID"]."' class='btn btn-warning'> <i class='fa fa-pencil-square-o' aria-hidden='true'></i> Editar</a>

					    </td>

					    <td>
					    	<a href='eliminar_registros.php?id=".$row["ID"]."' class='btn btn-danger'> <i class='fa fa-trash-o' aria-hidden='true'></i> Eliminar</a>
					    </td> </tr>";
							}
					    }else {
					    	echo "No hay información en la tabla.";

					    }
				$conexion->close();
				?>

					</tbody>	  
				</table>
		</div>
	</div>
</div>

</body>
</html>
