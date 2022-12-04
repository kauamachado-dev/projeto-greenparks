<?php
include("conexao.php");
$sql = "SELECT u.* , r.*
FROM usuario u
LEFT JOIN responsavel r ON u.id_responsavel = r.id_responsavel WHERE id_usuario= '23'";
 
$res = $conexaoMysqli->query($sql);
$row = $res->fetch_object();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>FORMULÁRIO</title>
    <script src='../Controller/_js/controlle-aluno.js'></script>
    <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
    <link href="../View/css/formaluno.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>  

    <img id="back" src="../View/css/images/formfund.png">
    <div class="titulo1">ALUNO</div>
    <div class="linha1"></div>

    <form action="editar_aluno.php" method="POST">
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
              <label for="sobrenome">Sobrenome</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="single-input">
              <input required type="date" name="nasc_usuario" id="datanascaluno" class="input" value="<?php print $row->nasc_usuario ?>">
              <label for="datanascaluno">Data de nascimento</label>
            </div>
          </div>
          <div class="col">
            <div class="single-input">
              <input required type="cpf" name="cpf_usuario" id="cpfaluno" class="input" value="<?php print $row->cpf_usuario ?>">
              <label for="cpfaluno">CPF Aluno</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="single-input">
              <input required type="text" name="nome_responsavel" id="nomeresponsavel" class="input" value="<?php print $row->nome_responsavel ?>">
              <label for="nomeresponsavel">Nome do Responsável</label>
            </div>
          </div>
          <div class="col">
            <div class="single-input">
              <input required type="tel" name="sobrenome_responsavel" id="sobrenomeresponsavel" class="input" value="<?php print $row->sobrenome_responsavel ?>">
              <label for="telefonealuno">Sobrenome do responsavel</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="single-input">
              <input required type="cpf" name="cpf_responsavel" id="cpfresponsavel" class="input" value="<?php print $row->cpf_responsavel ?>">
              <label for="cpfresponsavel">CPF Responsável</label>
            </div>
          </div> 
          <div class="col">
            <div class="single-input">
              <input required type="cpf" name="fone_usuario" id="telefonealuno" class="input" value="<?php print $row->fone_usuario ?>">
              <label for="foneresponsavel">Telefone</label>
            </div>
          </div>     
        </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="single-input">
              <input required type="email" name="email_usuario" id="emailaluno" class="input" value="<?php print $row->email_usuario ?>">
              <label for="emailaluno">E-mail</label>
            </div>
          </div>
          <div class="col">
            <div class="single-input">
              <input required type="password" name="senha_usuario" id="senhaaluno" class="input" value="<?php print $row->senha_usuario ?>">
              <label for="senhaaluno">Senha</label>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="text-center pt-1 mb-5 pb-1">
          <div class="form-group">
            <input type="submit" class="btn1" value="EDITAR CONTA">
            <input type="reset" class="btn2" value="APAGAR DADOS">
          </div>
        </div> 
    </form>
  </body>
</html>