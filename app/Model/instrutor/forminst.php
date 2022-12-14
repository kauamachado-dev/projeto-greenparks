<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>FORMULÁRIO</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
    <link href="../../View/css/forminst.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body style="margin-left: 500px">

  <img id="back" src="../../View/css/images/formprof.png">

    <form action="cad_instrutor.php" method="POST">
        <div class="titulo1">INSTRUTOR</div>
        <div class="linha1"></div>
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="single-input">
                    <input required type="text" name="nome_usuario" id="nome" class="input" placeholder="Insira seu nome...">
                    <label for="nome">Nome</label>
                  </div>
                </div>
                <div class="col">
                  <div class="single-input">
                    <input required type="text" name="sobrenome_usuario" id="sobrenome" class="input" placeholder="Informe seu sobrenome...">
                    <label for="sobrenome" >Sobrenome</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="single-input">
                    <input required type="date" name="nasc_usuario" id="nasc" class="input">
                    <label for="datanascaluno">Data de nascimento</label>
                  </div>
                </div>
                <div class="col">
                  <div class="single-input">
                    <input required type="cpf" name="cpf_usuario" id="cpf" class="input" placeholder="Informe seu cpf...">
                    <label for="cpf">CPF</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="single-input">
                    <input required type="email" name="email_usuario" id="email" class="input" placeholder="Informe seu e-mail...">
                    <label for="email">E-mail</label>
                  </div>
                </div>
                <div class="col">
                  <div class="single-input">
                    <input required type="tel" name="fone_usuario" id="fone" class="input" placeholder="Informe seu telefone...">
                    <label for="datanascaluno" >Fone</label>
                  </div>
                </div>
              </div>
                <div class="col">
                  <div class="single-input">
                    <input required type="password" name="senha_usuario" id="senha" class="input" placeholder="Informe uma senha...">
                    <label for="telefonealuno">Senha</label>
                  </div>
                </div>
            </div>
            <div class="text-center pt-1 mb-5 pb-1">
              <div class="form-group">
                <input type="submit" class="btn1" value="CRIAR CONTA">
                <a href="../../Pages/index.php" type="submit" class="btn2">VOLTAR</a>
                <p class="login">Já tem uma conta? <a href="../login.php">Entre aqui</a>.</p> 
              </div>
            </div>
            <script>
              $("#fone").mask("(99) 9999-9999");

              $("#cpf").mask("999.999.999-99");

	          </script>
    </form>
  </body>
</html>