<?php include_once 'lock.php';
include_once'../database/jogos.dao.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto Final-Home</title>
</head>
<body class="container-fluid">
	<h1>GamesSystem </h1>

	<p>
		<a href="logout.php" class="btn btn-dark btn-sm"> Sair do sistema </a>
	</p>
<?php  
if (isset($_GET['msg'])) 
{
	include_once '../util.php';
	echo validar_msg($_GET['msg']);
}
?>

	<h3>Utilize o form para cadastrar um novo jogo</h3>
	<form action="cadastrar.php", method="post" >
		<p>
			<label>Titulo</label><br>
			<input type="text" name="titulo_jogo" required>
		</p>
		<p>
			<label>Empresa</label><br>
			<input type="text" name="empresa_do_jogo" required>	
		</p>
		<p>
			<label>Genero</label><br>
			<input type="text" name="genero_do_jogo" required>
		</p>
		<p>
			<button type="submit" name="salvar"class="btn btn-dark">Salvar</button>
		</p>
	</form>
	<h2>Jogos cadastrados</h2>
	<?php 
		Echo exibir_jogos();
	 ?>

</body> 
</html>