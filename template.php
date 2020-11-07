<html>





				<head>
                        <meta chaset="utf-8" />
						<title>Gerenciador	de	Tarefas</title>
                        <link rel="stylesheet" href="tarefas.css" type="text/css">
				</head>



				<body>

					<h1>Gerenciador	de	Tarefas</h1>


                    <div>

						<form>
								<fieldset>
												<legend>Nova	tarefa</legend>

												<label>
                                                		Tarefa:
																<input class="tarefa-input"	type="text" name="nome"	/>
												</label>
											

                                                <label>

                                                Descrição:

                                                    <textarea class="descriçao-textarea" name="descriçao"></textarea>
                                                
                                                </label>

                                                <label>
                                                    Prazo:

                                                        <input class="prazo-input" type="text" name="prazo">
                                                
                                                </label>

                                                    <fieldset>
                                                        <legend>Prioridade:</legend>

                                                            <label>
                                                                <input type="radio" name="prioridade" value="baixa"
                                                                checked>Baixa


                                                                <input type="radio" name="prioridade" value="media">
                                                                Media

                                                                <input type="radio" name="prioridade" value="alta">
                                                                Alta

                                                            </label>
                                                    
                                                    
                                                    </fieldset>

                                            <label>
                                                Tarefa concluída:

                                                <input type="checkbox" name="concluida" value="sim">
                                            
                                            </label>

                                            <input	type="submit" value="Cadastrar"	/>

								</fieldset>
				        </form>


                        </div>
                        
			    	<table>

                        <tr>
                            <th>Tarefas</th>
                            <th>Descrição</th>
                            <th>Prazo</th>
                            <th>Prioridade</th>
                            <th>Concluída</th>
                        </tr>
                   

                            <?php foreach ($lista_tarefas as $tarefa) :?>

                                <tr>
                                    <td><?php echo $tarefa ['nome'];?></td>
                                    <td><?php echo $tarefa ['descriçao'];?></td>
                                    <td><?php echo $tarefa ['prazo'];?></td>
                                    <td><?php echo $tarefa ['prioridade'];?></td>
                                    <td><?php echo $tarefa  ['concluida'];?></td>
                                </tr>

                        <?php endforeach;?>

                    </table>



                    </body>


                    </html>