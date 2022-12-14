<?php
    //inicia sessão
    session_start();
    
    //Inclui arquivo de conexão
    include('conexao.php'); 

    //Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas
    if(isset($_SESSION["logado"]) && $_SESSION["logado"] == true){
        echo "<script>alert('Já está logado!');</script>";
        header("location: ../Pages/index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../View/css/login.css" rel="stylesheet">
</head>
<body id="body">
    <!-- TELA DE LOGIN -->
    <img id="back" src="../View/css/images/login.png">
    <div class="linha1"></div>
        <div class="titulo2">BEM VINDO!</div>
        <div class="container">
            <div class="card">
                <div class="titulo1">Login</div>
                 <!-- FORMULÁRIO -->
                <form action="processa.php" method="POST">
                    <!-- USUÁRIO -->
                    <div class="label-float">
                        <input type="text" class="form-control" id="nome_usuario" required name="nome_usuario">
                        <label for="usuario">Usuário</i></label>
                    </div>
                    <!-- SENHA -->
                    <div class="label-float">
                        <input type="password" class="form-control" id="senha_usuario" required name="senha_usuario">
                        <label for="senha">Senha</i></label>
                    </div>
                    <!-- BOTÃO-->
                    <input type="submit" value="ACESSAR" class="btn1">
                </form>
                <p> Não tem uma conta?
                <a href="../Model/aluno/formaluno.php"> Cadastre-se como aluno! </a>
                <a href="../Model/instrutor/forminst.php"> Cadastre-se como professor! </a>
            </div>
        </div>     
</html>