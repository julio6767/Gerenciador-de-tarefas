<?php session_start();



				

$lista_tarefas=[];

					
				if	(array_key_exists('nome', $_GET) && $_GET['nome'] !='')	{
							$tarefa = [];
							$tarefa['nome'] = $_GET['nome'];
				
							
						

				if (array_key_exists('descriçao', $_GET)) {

					$tarefa ['descriçao'] = $_GET ['descriçao'];

				}else {
					$tarefa['descriçao'] = '';
				}

				if (array_key_exists('prazo',$_GET)) {

					$tarefa['prazo'] = $_GET['prazo'];

				} else{
					$tarefa['prazo'] = '';
				}

				$tarefa ['prioridade'] = $_GET['prioridade'];

				if (array_key_exists('concluida', $_GET)){
					$tarefa['concluida'] = $_GET['concluida'];

				} else {
					$tarefa['concluida'] = '';	

					
				}

				 $_SESSION['lista_tarefas'][]	= $tarefa;
				 $lista_tarefas = $_SESSION ['lista_tarefas'];
			}
				

			include "template.php";
			
                ?>

