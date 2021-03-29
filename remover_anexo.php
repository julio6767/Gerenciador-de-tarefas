<?php 

require "config.php";
include "banco.php";
require "config.php";


$anexo = buscar_anexo ($conexao, $_GET['id']);
remover_anexo($conexao, $anexo['id']);
unlink('anexos/' . $anexo['arquivo']);

header('Location: tarefa.php?id=' . $anexo['tarefa_id']);







;?>