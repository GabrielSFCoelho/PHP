<?php
	include_once 'conn.php';
	function salvar_jogo($titulo_jogo, $empresa_do_jogo, $genero_do_jogo)
	{
		$conn=conectar();
		$sql ="INSERT INTO jogos_tb (titulo_jogo, empresa_do_jogo, genero_do_jogo)
		VALUES ('$titulo_jogo', '$empresa_do_jogo', '$genero_do_jogo')";
		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
		return true;
		}
		return false;
	}
	function buscar_jogos()
	{
			$conn = conectar(); 
			$sql = "SELECT * FROM jogos_tb";
			$result = mysqli_query($conn, $sql);
			if (mysqli_affected_rows($conn) > 0)
		{
			return $result;
		}

			return null;

	}

	function exibir_jogos()
	{
		$result = buscar_jogos();

		if ($result == null) 
		{
			$retorno = '<h3>não há jogos para exibir<h3>';
		}
		else 
		{
			$retorno = '<table class="table table-dark table-striped">';
			$retorno.='<tr>';
			$retorno.='<th>ID#</th>';
			$retorno.='<th>Titulo</th>';
			$retorno.='<th>Empresa</th>';
			$retorno.='<th>Genero</th>';
			$retorno.='<th>Deletar</th>';
			$retorno.='<th>Editar</th>';
			$retorno.='</tr>';
			while ($jogo = mysqli_fetch_assoc($result)) 
			{
			$retorno.='<tr>';
				$retorno .= "<td>"    . $jogo ['id_jogo']              . "</td>";
				$retorno .= "<td>"    . $jogo ['titulo_jogo']          . "</td>";
				$retorno .= "<td>"    . $jogo ['empresa_do_jogo']      . "</td>";
				$retorno .= "<td>"    . $jogo ['genero_do_jogo']       . "</td>";
				$retorno .= "<td>"    . link_deletar($jogo['id_jogo']) . "</td>"; 
				$retorno .= "<td>"    . link_editar($jogo['id_jogo'])  . "</td>"; 


			$retorno.='</tr>';
			}
			$retorno.='</table>';

		}
		return $retorno;
	}
	function link_deletar($id_jogo)
	{
		$link = '<a href="deletar.php?id_jogo='.$id_jogo.'" 
		onclick="return confirm(\' Tem certeza que deseja excluir este jogo?\')" class="btn btn-danger">Deletar</a>';
		return $link;
	}
	function link_editar($id_jogo)
	{
		$link = '<a href="editar.php?id_jogo='.$id_jogo.'" class="btn btn-warning">Editar</a>';
		return $link;
	}
	function deletar_jogo($id_jogo)
	
	{
		$conn = conectar();
		$sql = "DELETE FROM jogos_tb WHERE id_jogo = $id_jogo ";
		$result = mysqli_query ($conn, $sql);
		{
			return true;
		}
		return false;

	}
	function buscar_jogo ($id_jogo)
	{
		$conn = conectar();
		$sql = "SELECT * FROM jogos_tb WHERE id_jogo = $id_jogo";
		$result= mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn) > 0)
		 {
			return $result;
		}
		return null;
	}

	function editar_jogo ($id_jogo, $titulo_jogo,$empresa_do_jogo, $genero_do_jogo)
	{
		$conn = conectar();
		$sql = "UPDATE jogos_tb SET titulo_jogo = '$titulo_jogo', empresa_do_jogo = '$empresa_do_jogo', genero_do_jogo = '$genero_do_jogo'
		WHERE id_jogo = $id_jogo";
		$result = mysqli_query($conn,$sql);
		if (mysqli_affected_rows($conn) > 0) 
		{
			return true;
		}
		return false;
	}

?>