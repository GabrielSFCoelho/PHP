<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<h1>Atividade Avaliativa</h1>
	
		<br><?php include_once'menu.php'?><br><br>

		<?php
			$nome= $_REQUEST['nome'];
			$watts=$_POST['watts'];
			$horas_ligado= $_POST['horas_ligado'];
			$dias_ligado= $_POST['dias_ligado'];
			$kwatts_hora= str_replace(",",".",$_POST['kwatts_hora']);
			$calculo= 1000;
			$baixa= 5;
			$media=10;

			echo "Seu aprelho é <b>". strtoupper($nome) . "</b>, ele tem ". $watts ." watts, ele fica ". $horas_ligado ." horas ligado por dia, ". $dias_ligado ." dias ligado por semana e gasta ".$kwatts_hora." kilowatts por hora.</br></br>"; 

			$consumo = $watts/$calculo;
			$consumo_diario = $consumo * $horas_ligado;
			$consumo_mensal = $consumo_diario * $dias_ligado;
			$consumo_do_aparelho =number_format($consumo_mensal * $kwatts_hora, 2, '.', '');

			echo " Seu consumo diario é: ". $consumo_diario." kilowatts, consumo mensal é: ".$consumo_mensal ." kilowatts e seu consumo do aparelho é: R$ ". str_replace(".",",",$consumo_do_aparelho)." </br></br> ";

			if ($consumo_do_aparelho <= $baixa) {
				echo "Seu consumo é <b>Baixo</b>";
			}
			elseif ($consumo_do_aparelho <= $media) {
				echo "Seu consumno é <b>Medio</b>";
			}
			elseif ($consumo_do_aparelho > $media) {
				echo "Seu consumo é <b>Alto</b>";
			}
		?>
	</body>
</html>