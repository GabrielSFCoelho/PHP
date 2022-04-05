<?php include_once'lock.php';
if (!isset($_GET['id_jogo'])) 
{
	header('location:index.php?msg=idinvalido');
}
	else
	{
		$id_jogo = $_GET['id_jogo'];
		include_once '../database/jogos.dao.php';
		$result =deletar_jogo ($id_jogo);
		if ($result) 
		{
			header('location:index.php?msg=jogodeletado');

		}
		else
		{
			header('location:index.php?msg=errodeletar');
		}

	}



 ?>