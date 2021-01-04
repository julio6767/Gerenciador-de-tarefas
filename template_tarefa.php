<!DOCTYPE html>
<html lang="en">
<head>
<meta	charset="utf-8"	/>
    <title>Gerenciador	de	Tarefas</title>
    <link	rel="stylesheet"	href="tarefas.css" type="text/css"	/>
</head>
<body>

    <div="bloco_principal">
        <h1>Tarefa: <?php echo $tarefa['nome']; ?></h1>
            <p>
                <a href="index.php">
                    Voltar para lista de tarefas
                </a>
            </p>

            <p>
                <strong>Concluída:</strong>
                <?php echo 
                    traduz_concluida($tarefa['concluida']);?>
            </p>

            <p>
                <strong>Descrição:</strong>
                <?php echo 
                    nl2br($tarefa['descriçao']);?>
            </p>

            <p>
                <strong>Prazo:</strong>
                <?php echo 
                    traduz_data_para_exibir($tarefa['prazo']);?>
            </p>

            <p>
                <strong>Prioridade:</strong>
                <?php echo 
                    traduz_prioridade($tarefa['prioridade']);?>
            </p>

         <h2>Anexos</h2>
            <!-- lista de anexos -->
            <!--	formulário	para	um	novo	anexo	-->

                <form action="" method="post" ecntype="multipart/form-data">
                    <fieldset>
                        <legend>Novo Anexo</legend>

                        <input type="hidden" name="tarefa_id" value="<?php echo $tarefa['id']; ?>"/>

                        <label>
                            <?php if (
                                $tem_erros && array_key_exists('anexo',$erros_validaçao) ): ?>
                            <span class="erro">
                                <?php echo $erros_validaçao['anexo']; ?>
                            </span>

                            <?php endif ;?>

                             <input type="file" name="anexo">
                        </label>
                            
                            <input type="submit" value="Cadastrar">
                            

                    
                    </fieldset>
                
                
                
                </form>

                <!-- fim lista de anexos -->
    </div>
    
</body>
</html>