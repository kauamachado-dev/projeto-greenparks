<?php
//CONEXÃO A BANCO.

$host     = "localhost";
$usuario  = "root";
$senha    = "";
$dataBase = "greenpark";

//CRIA CONEXÃO COM O BANCO.
$conexaoMysqli = new mysqli($host, $usuario, $senha, $dataBase);

// TENTA A CONEXÃO, SE NÃO...
if($conexaoMysqli->connect_errno)
    //IMPRIMI MENSAGEM DE ERRO.
    echo "Falha na conexão: ("  . $conexaoMysqli->connect_errno . ") " . $conexaoMysqli->connect_error;
?>