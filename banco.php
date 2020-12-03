<?php 

$bdServidor = 'sql3.freemysqlhosting.net';
$bdUsuario = 'sql3380025';
$bdSenha = 'QfQEhxKHkc';
$bdBanco = 'tarefas';

 
$conexao = mysqli_connect ($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

if (mysqli_connect_errno($conexao)) {
    echo "problemas para conectar no banco. Erro:";
    echo mysqli_connect_error (); 
    die();
}

// busca todas as tarefas no banco
function buscar_tarefas($conexao) {

    $sql_busca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao,$sql_busca);

    $tarefas = [];

    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas [] = $tarefa;
    }

    return $tarefas;
}

function gravar_tarefa ($conexao,$tarefa) {
    $sqlGravar = "
        INSERT INTO tarefas 
        (nome,descricao,prioridade,prazo)
        VALUES
        (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
            '{$tarefa['prioridade']}',
            '{$tarefa['prazo']}'
        )
    ";
    mysqli_query($conexao, $sqlGravar);
}

// busca tarefas de forma isolada para edição
function buscar_tarefa ($conexao, $id) {

    $sqlBusca = 'SELECT * FROM  tarefas WHERE id = ' . $id ;

    $resultado = mysqli_query ($conexao,$sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function editar_tarefa($conexao,$tarefa) {
    $sqlEditar = "
    UPDATE	tarefas	SET
    nome	=	'{$tarefa['nome']}',
    descricao	=	'{$tarefa['descricao']}',
    prioridade	=	'{$tarefa['prioridade']}',
    prazo	=	'{$tarefa['prazo']}',
    concluida	=	'{$tarefa['concluida']}'
WHERE	id	=	{$tarefa['id']}

";

    



    mysqli_query($conexao,$sqlEditar);

    header('Location:	index.php');
    die();

 

    
   
}

function remover_tarefa ($conexao, $id) {
$sqlRemover = "DELETE FROM tarefas WHERE id = {$id}";
mysqli_query ($conexao, $sqlRemover);
}




;?>