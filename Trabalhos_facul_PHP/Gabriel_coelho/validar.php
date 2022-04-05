<?php
	if (!isset($_POST['entrar']) || empty($_POST['usuario']) || empty($_POST['senha']))
	{
		header('location:index.php?msg=embranco');
	}
	else 
	{
		$nome_usuario = $_POST['usuario'];
		$senha_usuario = $_POST['senha'];

		include_once 'database/usuario.dao.php';

		$result = buscar_usuario($nome_usuario, $senha_usuario);

		if ($result) {
			echo 'deu boa';
			session_start();
			$_SESSION['nome_usuario'] = $nome_usuario;
			$_SESSION['senha_usuario'] = $senha_usuario;
			header('location:sistema/index.php');


			} else {
			header('location:index.php?msg=invalido');
		}

	}

?>