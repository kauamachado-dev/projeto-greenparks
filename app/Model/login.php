<?php
session_start();
ob_start();
include_once 'login/conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="_css/login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='app/Controller/controlle-login.js'></script>
</head>

<body style="margin-left: 500px">
  <h1> BEM VINDO</h1>
    <form action="dashboard.php" syle="margin-top: 200px;" method="post">
        <div class="col-4">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="col-4">
          <label for="exampleInputPassword1" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha">
        </div>
        <br>
        <button onclick="verificar()"type="submit" class="btn btn-primary">Logar</button>
      </form>
</body>
</html>