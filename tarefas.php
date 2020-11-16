<?php session_start();
require "banco.php";
require "ajudante.php";




				


				


					
				if	(array_key_exists('nome', $_GET) && ($_GET['nome'] !=''))	{
							$tarefa = [];
							$tarefa['nome'] = $_GET['nome'];
							
						
							
				
							
						

				if (array_key_exists('descriçao', $_GET)) {

					$tarefa ['descriçao'] = $_GET ['descriçao'];

				}else {
					$tarefa['descriçao'] = '';
				}

				if (array_key_exists('prazo',$_GET)) {

					$tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);

				} else{
					$tarefa['prazo'] = '';
				}

				$tarefa ['prioridade'] = $_GET['prioridade'];

				if (array_key_exists('concluida', $_GET)){
					$tarefa['concluida'] = $_GET['concluida'];

				} else {
					$tarefa['concluida'] = '';	

					
				}
				

				gravar_tarefa ($conexao, $tarefa);
				
			
			
			
			}
	
			$lista_tarefas = buscar_tarefas($conexao);
			
			
			
			

			
			
			

			include "template.php";

			
				
			
			
			
			
                ?>

