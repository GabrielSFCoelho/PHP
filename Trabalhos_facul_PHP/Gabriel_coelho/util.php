<?php  
	function validar_msg($msg)
	{
		switch ($msg) {
			case 'embranco':
			$retorno='<h3 class="alert alert-warning">Informe todos os dados de login</h3>';
				break;
			case 'invalido':
				$retorno='<h3 class="alert alert-danger">Usuario ou senha invalido</h3>';
				break;
			case 'cadembranco':
			$retorno='<h3 class="alert alert-warning">Preencha todos os dados do Jogo para cadastrar</h3>';
				break;
			case 'edtembranco':
			$retorno='<h3 class="alert alert-warning">Preencha todos os dados do Jogo para editar</h3>';
				break;
			case 'cadastrado':
			$retorno='<h3 class="alert alert-success">Jogo cadastrado com sucesso</h3>';
				break;
			case 'errocadastro':
			$retorno='<h3 class="alert alert-danger">ERRO ao cadastrar jogo</h3>';
				break;
				break;
			case 'idinvalido':
			$retorno='<h3 class="alert alert-warning">Atençao id invalido</h3>';
				break;
				case 'jogodeletado':
			$retorno='<h3 class="alert alert-success">Jogo excluido com sucesso</h3>';
				break;
				case 'errodeletar':
			$retorno='<h3 class="alert alert-danger">ERRO ao deletar Jogo</h3>';
				break;
			case 'editado':
			$retorno='<h3 class="alert alert-success">Jogo editado com sucesso</h3>';
				break;
				case 'erroeditado':
			$retorno='<h3 class="alert alert-danger">ERRO  ao editar Jogo</h3>';
				break;
			default:
				$retorno = '';
				break;
		}
		return $retorno;
	}


?>