<?php include_once 'lock.php';
include_once'../database/jogos.dao.php';
if (!isset($_GET['id_jogo']))
{
	header ('location:index.php?msg=idinvalido');
}
else
{
	$result = buscar_jogo($_GET['id_jogo']);
	if ($result == null) 
	{
		header ('location:index.php?msg=idinvalido');
	}
	else
	{
		$jogo= mysqli_fetch_assoc($result);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto final Editar</title>
</head>
<body class="container-fluid">
	<h1>EDITAR JOGO</h1>

	<p>
		<a href="index.php" class="btn btn-dark btn-sm"> Cancelar edição </a>
	</p>
	<h3>Utilize o form para Editar um jogo</h3>
	<form action="editado.php", method="POST" >
		<p>
			<label>Titulo</label><br>
			<input type="text" name="titulo_jogo" required value="<?php print $jogo["titulo_jogo"]; ?>">
		</p>
		<p>
			<label>Empresa</label><br>
			<input type="text" name="empresa_do_jogo" required value="<?php echo $jogo['empresa_do_jogo']; ?> ">	
		</p>
		<p>
			<label>Genero</label><br>
			<input type="text" name="genero_do_jogo" required value="<?php echo $jogo['genero_do_jogo'];?> ">
		</p>
		<p>
			<button type="submit" name="salvar"class="btn btn-dark">Salvar Alterações</button>
		</p>
		<input type= "hidden" name= "id_jogo" value="<?= $jogo['id_jogo']?>">
	</form>

</body>
</html>