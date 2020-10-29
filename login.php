<?php  
	include 'template/header.php'; 
	include 'conexion.php';

	if(isset($_SESSION["login"])){
		if($_SESSION["login"] == 1){
			header('Location: index.php');
		}
}

	$message = '';
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM usuarios WHERE usuario = '".$usuario."'";
		$result = $conexion->query($sql);
		
		if($result->num_rows == 1){
			while ($row = $result->fetch_assoc()) {
				$password_bd = $row['password'];
			}

			if (password_verify($password, $password_bd)) {
				session_start();
				$result2 = $conexion->query($sql);
				while($fila = $result2->fetch_assoc()){
					$_SESSION['id_user'] = $fila['ID'];
					$_SESSION['nombre_usuario'] = $fila['nombre_usuario'];
				}

				$_SESSION['login'] = 1;
				header('Location: index.php');
			}else{
				$message = "Contraseña incorrecta";
			}
		}else{
			$message = "Usuario no encontrado";
		}
	}

?>
<div class="container">
	<div class="row">
		<div class="col-md-6 mt-4 pt-4">
						<form action="" method="POST">
						<div class="form-group">
					    	<label for="inputName">Nombre de usuario:</label>
					    	<input type="text" class="form-control" id="inputUsuario" name="usuario">
						</div>

						<div class="form-group">
						    <label for="inputEmail">Contraseña:</label>
						    <input type="text" class="form-control" id="inputPassword" name="password">
						</div>

						 <input type="submit" class="btn btn-primary">
					</form>
					<?php 
			if($message != ''){
				echo $message;
			}

			?>
		</div>
	</div>
</div>

