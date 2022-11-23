<?php
// Inicialize a sessão
session_start();
 
    // Verifique se o usuário está logado, se não, redirecione-o para uma página de login
    if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("location: ../Model/login.php");
    exit;
    }
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Oi, <b><?php echo htmlspecialchars($_SESSION["nome_usuario"]); ?></b>. Bem vindo ao nosso site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Redefina sua senha</a>
        <a href="../Controller/sair.php" class="btn btn-danger ml-3">Sair da conta</a>
    </p>
</body>
</html>