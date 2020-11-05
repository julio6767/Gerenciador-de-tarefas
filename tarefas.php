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
				if	(array_key_exists('nome',	$_GET))	{
								echo "Nome	informado:	"	.	$_GET['nome'];
				}
                
                ?>




				</body>


				</html>