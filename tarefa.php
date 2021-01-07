<?php
include "banco.php";
include "ajudante.php";
$tem_erros	=	false;
$erros_validacao	=	[];



if	(tem_post())	{
		
				//	upload	dos	anexos
			$tarefa_id =  $_POST['tarefa_id'];

		if (! array_key_exists('anexo', $_FILES))	{
				$tem_erros = true;
				$erros_validacao ['anexo'] = 
				'Voce deve selecionar um arquivo para anexar' ;
		}
	else {
		if (tratar_anexo($_FILES['anexo']))  {
			$nome = $_FILES['anexo']['name'];
			$anexo = [

				'tarefa_id' => $tarefa_id,
				'nome'=> substr ($nome, 0, -4),
				'arquivo'=> $nome,
			];
		
			/*
				"substr()	,	que	pega	trechos de	uma	string." 


				na variável		$nome	,	o	começo	do	trecho	do	texto	que	queremos	extrair,
				que	é	a	posição	zero	e,	por	último,	até	onde	queremos	cortar	o	texto,
				que	é	até	faltar	4	caracteres	para	o	final	do	nome.	Assim,	se	o	nome
				for	algo	como		relatorio.pdf	,	o		.pdf		será	removido	e	ficaremos
				apenas	com	o	texto		relatorio	 */

			
		}	else {
				$tem_erros = true;
				$erros_validacao ['anexo'] = 'Envie anexos nos formatos ZIP ou PDF';
			}
		}

		if (! $tem_erros) {
			gravar_anexo ($conexao, $anexo);
		}
	}



$tarefa	=	buscar_tarefa($conexao,	$_GET['id']);
$anexos = buscar_anexos ($conexao,$_GET['id']);
include "template_tarefa.php";
