<?php session_start();?>

<html>





				<head>
						<title>Gerenciador	de	Tarefas</title>
				</head>



				<body>

					<h1>Lista de contatos</h1>



						<form>
								<fieldset>
												<legend>Novo contato</legend>
												<label>
                                                		Nome:
																<input	type="text" name="nome"	/>
												</label>

                                              
												<label>
                                                		Telefone:
																<input	type="text" name="telefone"	/>
												</label>

                                                
												<label>
                                                		Email:
																<input	type="text" name="email"	/>
												</label>


												<input	type="submit" value="Cadastrar"	/>


								</fieldset>
				        </form>

                <?php

                    $lista_tarefas = [];
                    
                $contatos = ['nome','telefone','email'];

                 
                for ($i=0 ; $i < 3; $i++) {

				if	(array_key_exists($contatos[$i],	$_GET))	{
							$_SESSION	['lista_tarefas'] [] = $_GET[$contatos[$i]];
				}
                
					$lista_tarefas = [];

				if (array_key_exists('lista_tarefas', $_SESSION)) {

					$lista_tarefas = $_SESSION ['lista_tarefas'];
                }
                

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
