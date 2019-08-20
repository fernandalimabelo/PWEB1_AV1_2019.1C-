<?php

function __e($input) {
    @$input = trim($input);
    @$input = stripslashes($input);
    @$input = htmlspecialchars($input);
    return $input;
}

function limparVetor($varPost) {
    $arrayLimpo = [];
    foreach ($varPost as $indice => $valor) {
        $arrayLimpo[$indice] = __e($valor);
    }
    return $arrayLimpo;
}

function formEnviado($postArray) {
    global $dados;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dados = limparVetor($postArray);
        return true;
    } else {
        header('Location: ../index.php');
        die();
    }
}

function mensagemErro($postArray) {
    global $mensagem_erro;

    if ($postArray["nome"] == '') {
        $mensagem_erro["nome_vazio"] = "Preencha o campo Nome Completo <br>";
        echo $mensagem_erro["nome"];
        echo "<a href = '../index.php'>Clique para redirecionar!</a>";

    }elseif ($postArray["email"] == '') {
        $mensagem_erro["email_vazio"] = "Preencha o campo Email <br>";
        echo $mensagem_erro["email"];
        echo "<a href = '../index.php'>Clique para redirecionar!</a>";

    }elseif ($postArray["telefone"] == ''){
        $mensagem_erro["telefone_vazio"] = "Preencha o campo Telefone <br>";
        echo $mensagem_erro["telefone"];
        echo "<a href = '../index.php'>Clique para redirecionar!</a>";

    }elseif ($postArray["opcao"] == ''){
        $mensagem_erro["opcao_vazio"] = "Escolha um tipo de Mensagem <br>";
        echo $mensagem_erro["opcao"];
        echo "<a href = '../index.php'>Clique para redirecionar!</a>";

    }elseif ($postArray["tipo_cliente"] == ''){
        $mensagem_erro["tipo_cliente_vazio"] = "Marque o tipo de cliente";
        echo $mensagem_erro["tipo_cliente"];
        echo "<a href = '../index.php'>Clique para redirecionar!</a>";

    }elseif ($postArray["confirmar"] == ''){
        $mensagem_erro["confirmar_vazio"] = "Confirme";
        echo $mensagem_erro["confirmar"];
        echo "<a href = '../index.php'>Clique para redirecionar!</a>";

    }else ($postArray["mensagem_cliente"] == ''){
        $mensagem_erro["mensagem_cliente_vazio"] = "Escreva uma mensagem";
        echo $mensagem_erro["mensagem_cliente"];
        echo "<a href = '../index.php'>Clique para redirecionar!</a>";
    }

}

?>