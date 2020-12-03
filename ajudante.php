<?php 

function traduz_prioridade ($codigo) {

    $prioridae = '';
    switch ($codigo) {
        case 1:
            $prioridae = 'Baixa';
        break;
        case 2:
            $prioridae = 'Media';
        break;
        case 3:
            $prioridae = 'Alta';
        break;
    }
    return $prioridae;
}

function  traduz_data_para_banco($data) {
    if ($data == "") {
        return "";
    }

    $dados = explode("/",$data);
    $data_banco	=	"{$dados[2]}-{$dados[1]}-{$dados[0]}";

    return $data_banco;

}

function traduz_data_para_exibir ($data) {

    if ($data == "" OR $data == "0000-00-00") {
        return "";
    }

    $dados = explode ("-",$data);
    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    return $data_exibir;

}

function	traduz_concluida($concluida)
				{
								if	($concluida	==	1)	{
												return 'Sim';
								}
								return 'Não';
				}


;?>