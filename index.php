<?php session_start();
require "config.php";
require "banco.php";
require "ajudante.php";

$exibir_tabela = true;

$tem_erros = false;
$erros_validacao = [];


				


				


					
			

				/*verificar	se	o	nome	está	no		POST		e	se	a
					contagem	de	caracteres	é maior	do	que	zero*/

							
							if	(tem_post())	{

							

							if (array_key_exists('nome',$_POST) && strlen($_POST['nome']) > 0 ) {
								$tarefa = [];

								$tarefa['nome'] = $_POST['nome'];
							}
							else {
								$tem_erros = true ;
								$erros_validacao ['nome'] = 'o nome da tarefa é obrigatório';
							}
							

										
							
						
							
				
							
						

				if (array_key_exists('descricao', $_POST)) {

					$tarefa ['descricao'] = $_POST ['descricao'];

				}else {
					$tarefa['descricao'] = '';
				}

				if (array_key_exists('prazo',$_POST) && strlen($_POST['prazo']) > 0)  {

					if (validar_data($_POST['prazo'])) {
						$tarefa['prazo'] = traduz_data_para_banco($_POST['prazo']);
					}

					else {
						$tem_erros = true;
						$erros_validacao['prazo'] = 'O prazo não é uma data válida! EX: 00/00/0000';
					}
				}
					else{
						$tarefa['prazo'] = '';
					}

					


				
				

				$tarefa ['prioridade'] = $_POST['prioridade'];

				if (array_key_exists('concluida', $_POST)){
					$tarefa['concluida'] = $_POST['concluida'];

				} else {
					$tarefa['concluida'] = '';	

					
				}
				

				if (! $tem_erros  ) {
					/* Caso	 algum	 erro	 exista,	 a	 função	 	gravar_tarefa()		 não
					será	 chamada,	 e	 o	 arquivo	 	 tarefas.php	 	 continuará	 a	 ser executado*/

					gravar_tarefa($conexao,$tarefa);

					if (
						array_key_exists('lembrete',$_POST)
						&& $_POST['lembrete'] == '1'
					){
						enviar_email($tarefa);
					}
					header('location: index.php');
					die();

				}

				

				
				

							}
				
			
			
			
			
	
			$lista_tarefas = buscar_tarefas($conexao);
			
			
			
			

			
			$tarefa	=	[
				'id'									=>	0,
				'nome'							=>	(array_key_exists('nome',	$_POST))	?
				$_POST['nome']	:	'',
				'descricao'		=>	(array_key_exists('descricao',	$_POST))	?
				$_POST['descricao']	:	'',
				'prazo'						=>	(array_key_exists('prazo',	$_POST))	?
												traduz_data_para_banco($_POST['prazo'])	:	'',
				'prioridade'	=>	(array_key_exists('prioridade',	$_POST))	?
				$_POST['prioridade']	:	1,
				'concluida'		=>	(array_key_exists('concluida',	$_POST))	?
				$_POST['concluida']	:	''
				];

			include "template.php";

			
				
			
			
			
			
                ?>

