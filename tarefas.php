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
								$lista_tarefas[] = $_GET['nome'];
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
