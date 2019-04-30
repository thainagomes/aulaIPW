<?php
	include ("Noticia.php");
	$listarNoticia = new Noticia(); //new = classe
	$id = filter_input(INPUT_GET, "id");
	$situacao= filter_input(INPUT_GET, "situacao");
	
	$retorno = $listarNoticia->ativarInativar($id,$situacao);
	
	if($retorno) {
		echo "Notícia ativada ou inativada com sucesso";
	}else {
		echo "Erro ao ativar ou inativar a notícia";
		}
		
?>	
