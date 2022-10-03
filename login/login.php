<?php
session_start();
ob_start();
include_once 'login/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="_css/stilo.css" rel="stylesheet">
</head>

<body>
<h1> BEM VINDO</h1>
    <form action="logar.php" style="margin-top: 200px;" method="POST">
        <div class="col-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
            </div>
            <div class="col-4">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha">
         </div>
        <br>
        <input type="submit" value="Acessar" name="SendLogin">
      </form>

    <br><br>
    Usuário: greenpower.adm@gmail.com<br>
    Senha: green123
</body>

</html>