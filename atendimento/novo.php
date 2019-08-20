<?php

require_once("../validacoes/validar.php");
require_once("../validacoes/variaveis.php");

formEnviado($_POST);
mensagemErro($dados);
limparVetor($dados);
mostrarDados($dados);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $elogio = $_POST["elogio"];
    $tipo_cliente = $_POST["tipo_cliente"];
    $aceitar = $_POST["confirmar"];

}

function mostrarDados($postArray){

    echo "<h2> Informações do Cliente </h2>";

    echo "Nome Completo: ";
    echo $postArray["nome"];

    echo "<br>Email: ";
    echo $postArray["email"];

    echo "<br>Telefone: ";
    echo $postArray["telefone"];

    echo "<br>Tipo de Mensagem: ";
    echo $postArray["opcao"];

    echo "<br>Tipo de Cliente: ";
    global $tipo_cliente;

    if($tipo_cliente == "novo_cliente"){
        echo $postArray["tipo_cliente"];
    }else{
        echo $postArray["tipo_cliente"];
    }

    global $aceitar;
    if(isset($_POST["aceitar"])){
        foreach($_POST["aceitar"] as $aceitar){
            echo "Confirmado";
        }
    }else {
        echo "Não confirmado:  ";
        echo "<a href = '../index.php'>Clique para redirecionar!</a>";
    }

    echo "<br>Sua mensagem: ";
    echo $postArray["mensagem_cliente"];

}

?>
