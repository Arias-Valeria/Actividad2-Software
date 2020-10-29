<?php
	include 'conexion.php';
	$id_eliminar = $_GET['id'];

	$sql = "DELETE FROM personas WHERE id=".$id_eliminar;

	echo $sql.'<br>';
	if ($conexion->query($sql) === TRUE) {
		if($conexion->affected_rows > 0 ){
			header ('Location: listar_registros.php');
		}else{
			echo "El registro no existe";
		}
	  
	} else {
	  echo "Error al eliminar el registro: " . $conexion->error;
	}

	$conexion->close();
?>

