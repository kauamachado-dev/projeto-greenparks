<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $dataBase = "greenpark";

    global $pdo;

    //CONEXÃO A BANCO
    $conn = mysqli_connect($host, $usuario, $senha, $dataBase);
    
    if($conn->connect_errno){
        echo "Falha na conexão: (" . $conn->connect_errno . ")" . $conn->connect_error;
    }   

    //CONEXÃO PDO
    try{  
        $cpdo = new PDO("mysql::host=$host;dbname=" . $dataBase, $usuario, $senha);           
    //Conexão realizada, se não...
    }

    catch(PDOException $err){
        echo "Erro: Conexão ao banco de dados falhou!";
    }
?>