<?php include_once 'lock.php';
if (!isset($_POST['salvar']) || empty($_POST['titulo_jogo']) || empty($_POST['empresa_do_jogo']) || empty($_POST['genero_do_jogo']))
	{
		header('location:index.php?msg=cadembranco');
	}
	else
	{
		$titulo_jogo = $_POST['titulo_jogo'];
		$empresa_do_jogo = $_POST['empresa_do_jogo'];
		$genero_do_jogo = $_POST['genero_do_jogo'];

		include_once '../database/jogos.dao.php';
		$result = salvar_jogo ($titulo_jogo, $empresa_do_jogo, $genero_do_jogo);	
		if ($result)
		{
			header('location:index.php?msg=cadastrado');
		}
		else
		{
			header('location:index.php?msg=errocadastro');
		}
	}


?>