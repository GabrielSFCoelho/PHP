<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Atividade Avaliativa</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>

	<body>
	<h1>Atividade Avaliativa</h1>

	<p><h3>Pagina Principal</h3><br><br></p>

	<form action="cadastro.php" method="post">
		<p>
			<label>informe o nome do aparelho </label><br>
			<input type="text" name="nome" maxlength="50" required placeholder="ex: Computador">
		</p>
		<p>
			<label>informe o consumo maximo em (watts):</label><br>
			<input type="double" name="watts" required placeholder="ex:1000">
		</p>
		<p>
			<label>informe o numero de horas que fica ligado por dia:</label><br>
			<input type="number" name="horas_ligado" required placeholder="ex:8">
		</p>
		<p>
			<label>informe o numero de dia que fica ligado no mes:</label><br>
			<input type="number" name="dias_ligado" required placeholder="ex:30">
		</p>
		<p>
			<label>valor em kilowatts-hora:</label><br>
			<input type="double" name="kwatts_hora" required placeholder="ex:0,4">
		</p>
			<button type="subimit" name="enviar">enviar</button>
		</form>
	</body>
</html>