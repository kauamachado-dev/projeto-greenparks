<?php
session_start();

$host = "localhost";
$user = "root";
$senha = "";
$dbname = "greenpark";

global $pdo;

try{    
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $senha);
    echo "Conexão com banco de dados realizado com sucesso!";

}catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}