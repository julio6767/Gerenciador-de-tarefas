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

    $partes	=	explode("/",	$data);

    if (count($partes) != 3) {
        return $data;
    }
    
    $objeto_data	=	DateTime::createFromFormat('d/m/Y',	$data);
    return $objeto_data->format('Y-m-d');
}

function traduz_data_para_exibir ($data) {

    if ($data == "" OR $data == "0000-00-00") {
        return "";
    }

    $partes = explode ("-",$data);

        if (count($partes) != 3 ) {
            return $data;
        }
    
    
    $objeto_data = DateTime::createFromFormat('Y-m-d',$data);

    return $objeto_data->format('d/m/Y');

}

function	traduz_concluida($concluida)
				{
								if	($concluida	==	1)	{
												return 'Sim';
								}
								return 'Não';
				}



function tem_post() {
    if (count($_POST) > 0 ) {
        return true;
    }

    return false;
}

function validar_data ($data) {
    $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
    $resultado = preg_match($padrao,$data);

    if ($resultado==0) {
        return false;
    }

    $dados = explode ('/',$data);
    $dia = $dados[0];
    $mes= $dados[1];
    $ano= $dados[2];

    $resultado = checkdate($mes,$dia,$ano);

    return ($resultado);

}

function tratar_anexo ($anexo) {

        $padrao = '/^.+(\.pdf|\.zip)$/';
        $resultado = preg_match($padrao,$anexo['name']);

        if ($resultado == 0 ) {
            return false ;

        }

            move_uploaded_file($anexo['tmp_name'],"anexos/{$anexo['name']}");

            return true;
}

function enviar_email ($tarefa,$anexos) {
// Acessar a aplicação de e-mails;

// Fazer a autenticação com usuário e senha;

// Usar a opção para escrever um e-mail;

// Digitar o e-mail do destinatário;

// Digitar o assunto do e-mail;

// Escrever o corpo do e-mail;

// Adicionar os anexos, quando necessário;

// Usar a opção de enviar o e-mail.



}

;?>