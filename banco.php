<?php 

$bdServidor = '127.0.0.1';
$bdUsuario = 'sistematarefas';
$bdSenha = '6767';
$bdBanco = 'tarefas';

 
$conexao = mysqli_connect ($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

if (mysqli_connect_errno($conexao)) {
    echo "problemas para conectar no banco. Erro:";
    echo mysqli_connect_error ();
    die();
}


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
        (nome,descriçao,prioridade,prazo)
        VALUES
        (
            '{$tarefa['nome']}',
            '{$tarefa['descriçao']}',
            '{$tarefa['prioridade']}',
            '{$tarefa['prazo']}'
        )
    ";
    mysqli_query($conexao, $sqlGravar);
}

;?>