<?php
include("conexao.php");

session_start();

$sql = "SELECT * FROM usuario WHERE id_usuario = '1'";

    $res = $conexaoMysqli->query($sql);
    $row = $res->fetch_object();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>FORMULÁRIO</title>
    <script src='../Controller/_js/controlle-prof.js'></script>
    <link href="../View/css/forminst.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body style="margin-left: 500px">

  <img id="back" src="../View/css/images/formprof.png">

    <form action="editar_instrutor.php" method="POST">
    <input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">
        <div class="titulo1">INSTRUTOR</div>
        <div class="linha1"></div>
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="single-input">
                    <input required type="text" name="nome_usuario" id="nome" class="input" value="<?php print $row->nome_usuario ?>">
                    <label for="nome">Nome</label>
                  </div>
                </div>
                <div class="col">
                  <div class="single-input">
                    <input required type="text" name="sobrenome_usuario" id="sobrenome" class="input" value="<?php print $row->sobrenome_usuario ?>">
                    <label for="sobrenome" >Sobrenome</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="single-input">
                    <input required type="date" name="nasc_usuario" id="nasc" class="input" value="<?php print $row->nasc_usuario ?>">
                    <label for="datanascaluno">Data de nascimento</label>
                  </div>
                </div>
                <div class="col">
                  <div class="single-input">
                    <input required type="cpf" name="cpf_usuario" id="cpf" class="input" value="<?php print $row->cpf_usuario ?>">
                    <label for="cpf">CPF</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="single-input">
                    <input required type="email" name="email_usuario" id="email" class="input" value="<?php print $row->email_usuario ?>">
                    <label for="email">E-mail</label>
                  </div>
                </div>
                <div class="col">
                  <div class="single-input">
                    <input required type="text" name="fone_usuario" id="fone" class="input" value="<?php print $row->fone_usuario ?>">
                    <label for="datanascaluno" >Fone</label>
                  </div>
                </div>
              </div>
              <div class="col">
                  <div class="single-input">
                    <input required type="password" name="senha_usuario" id="senha" class="input" value="<?php print $row->senha_usuario ?>">
                    <label for="telefonealuno">Senha</label>
                  </div>
              </div>
            </div>
            <div class="text-center pt-1 mb-5 pb-1">
              <div class="form-group">
                <input type="submit" class="btn1" value="EDITAR CONTA">
                <a href="../Pages/index.php" type="submit" class="btn2">VOLTAR</a>
              </div>
            </div>
    </form>
  </body>
</html>