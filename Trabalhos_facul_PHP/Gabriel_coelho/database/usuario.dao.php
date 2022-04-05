<?php
	 function buscar_usuario($nome_usuario, $senha_usuario)
	 {
	 	include_once 'conn.php';
	 	
	 	$conn = conectar();

	 	$sql = "SELECT * FROM usuarios_tb WHERE nome_usuario = '$nome_usuario' AND senha_usuario = '$senha_usuario'";
	 	//print $sql;
	 	$result = mysqli_query($conn, $sql);
	 	
	 	if (mysqli_affected_rows($conn) > 0) 
	 	{
	 		return true;
	 	}

	 	return false;

	}
?>