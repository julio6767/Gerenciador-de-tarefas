<?php 

session_start();
require "config.php";
require "banco.php";
require "ajudante.php";



$exibir_tabela = false;
$tem_erros = false;
$erros_validacao = [];



					
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

					editar_tarefa($conexao,$tarefa);
					if (
						array_key_exists('lembrete', $_POST)
						&& $_POST['lembrete'] == '1'
					){
						$anexos = buscar_anexos ($conexao, $tarefa['id']); enviar_email($tarefa, $anexos);
					}

					header('location: index.php');
					die();

				}




			}
				



	
         
			/*validação	do formulario
				esse trecho preenche o formulario com os ultimos dados digitados pelo usuario
					difente de antes que quandp atualizado voltava os mesmos dados do banco
				*/
			

            $tarefa	=	buscar_tarefa($conexao,	$_GET['id']);
			
			$tarefa ['nome'] = (array_key_exists('nome', $_POST)) ?
				$_POST ['nome'] : $tarefa ['nome'];
			
			$tarefa ['descriçao'] = (array_key_exists('descriçao', $_POST)) ?
				$_POST ['descriçao'] : $tarefa ['descriçao'];

			$tarefa ['prazo'] = (array_key_exists('prazo', $_POST)) ?
				$_POST ['prazo'] : $tarefa ['prazo'];

			$tarefa ['prioridade'] = (array_key_exists('prioridade', $_POST)) ?
				$_POST ['prioridade'] : $tarefa ['prioridade'];
			
			$tarefa ['concluida'] = (array_key_exists('concluida', $_POST)) ?
				$_POST ['concluida'] : $tarefa ['concluida'];

	

			include "template.php";
			

		
                ?>