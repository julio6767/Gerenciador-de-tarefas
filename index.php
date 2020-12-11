<?php session_start();
require "banco.php";
require "ajudante.php";

$exibir_tabela = true;

$tem_erros = false;
$erros_validacao = [];


				


				


					
			if (tem_post())	{

				/*verificar	se	o	nome	está	no		POST		e	se	a
					contagem	de	caracteres	é maior	do	que	zero*/

							$tarefa = [];

							if (array_key_exists('nome',$_POST) && strlen($_POST['nome'] > 0 )) {
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

				if (array_key_exists('prazo',$_POST)) {

					$tarefa['prazo'] = traduz_data_para_banco($_POST['prazo']);

				} else{
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
					header('location: index.php');
					die();

				}

				
				

			
				
			
			
			
			}
	
			$lista_tarefas = buscar_tarefas($conexao);
			
			
			
			

			
			$tarefa = [
				'id' 			=> 0,
				'nome' 			=> '',
				'descricao' 	=> '',
				'prazo' 		=> '',
				'prioridade'    => 1,
				'concluida' 	=> ''
			];
			

			include "template.php";

			
				
			
			
			
			
                ?>

