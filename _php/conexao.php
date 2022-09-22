<?php

$hostname = "localhost";
$dbname = "db_greenparks";
$usuario = "root";
$senha = "";


    $conexao = mysqli_connect($hostname, $usuario, $senha, $dbname);
    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }

?>