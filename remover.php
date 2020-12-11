<?php
require "banco.php";
remover_tarefa($conexao,	$_POST['id']);
header('Location:	index.php');
die();





;?>