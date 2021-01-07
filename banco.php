<?php 

$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
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

function gravar_anexo ($conexao,$anexo) {

    $sql_Gravar = " INSERT INTO anexos 
                    (tarefa_id, nome, arquivo)
                    VALUES 
                    (
                        {$anexo['tarefa_id']},
                        '{$anexo['nome']}',
                        '{$anexo['arquivo']}'
                    )
    ";

    mysqli_query($conexao, $sql_Gravar);
}

function buscar_anexos ($conexao, $tarefa_id) {

    $sql = "
            SELECT * FROM anexos
            WHERE tarefa_id = {$tarefa_id} ";

         $resultado	=	mysqli_query($conexao,	$sql);

        $anexos = [];

        while ($anexo = mysqli_fetch_assoc($resultado)) {
            $anexos[] = $anexo;

        }
    return $anexos;
}

;?>
