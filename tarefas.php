<?php session_start();?>

<html>





				<head>
						<title>Gerenciador	de	Tarefas</title>
				</head>



				<body>

					<h1>Gerenciador	de	Tarefas</h1>



						<form>
								<fieldset>
												<legend>Nova	tarefa</legend>
												<label>
                                                		Tarefa:
																<input	type="text" name="nome"	/>
												</label>
												<input	type="submit" value="Cadastrar"	/>
								</fieldset>
				        </form>

                <?php

					$lista_tarefas = [];
				if	(array_key_exists('nome',	$_GET))	{
							$_SESSION	['lista_tarefas'] [] = $_GET['nome'];
				}
					
					$lista_tarefas = [];

				if (array_key_exists('lista_tarefas', $_SESSION)) {

					$lista_tarefas = $_SESSION ['lista_tarefas'];
				}
			
                ?>

				<table>

					<tr>
						<th>Tarefas</th>
					</tr>

						<?php foreach ($lista_tarefas as $tarefa) :?>

							<tr>
								<td><?php echo $tarefa ;?></td>
							</tr>

					<?php endforeach;?>

				</table>



				</body>


				</html>
