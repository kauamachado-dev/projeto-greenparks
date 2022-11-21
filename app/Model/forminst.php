<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>FORMULÁRIO</title>
    <script src='_js/controlle-prof.js'></script>
    <link href="../View/css/forminst.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="margin-left: 500px">
  <form action="?page=salvar_usuario" method="POST">
<div class="titulo1">INSTRUTOR</div>
<div class="linha1"></div>
  <form method="POST">
  <input type="hidden">
    <div class="container">
      <div class="row">
        <div class="col">
        <div class="single-input">
          <input required type="text" name="nome_usuario" id="nome_usuario" class="input" placeholder="Insira seu nome...">
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
          <label for="datanascaluno">Nascimento</label>
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
        <input required type="password" name="senha_usuario" id="telefonealuno" class="input" placeholder="Informe uma senha...">
        <label for="telefonealuno">Senha</label>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="single-input">
          <input required type="number" name="fone_usuario" id="fone" class="input" placeholder="Informe seu telefone...">
          <label for="datanascaluno" >Fone</label>
        </div>
        </div>
      <div class="col">
      <div class="single-input">
          <input required type="cep" name="cep_usuario" id="cep" class="input" placeholder="Infome seu CEP...">
          <label for="cep">CEP</label>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col">
      <div class="single-input">
          <input required type="address" name="rua_endereco" id="rua" class="input"placeholder="Seu endereço...">
          <label for="bairro">RUA</label>
      </div>
      </div>
      <div class="col">
      <div class="single-input">
          <input required type="address" name="bairro_endereco" id="bairro" class="input"placeholder="Seu bairro...">
          <label for="bairro">Bairro</label>
      </div>
      </div>
      <div class="col">
          <div class="single-input">
              <input required type="number" name="num_casa_endereco" id="numeroaluno" class="input" placeholder="Nº de sua casa...">
              <label for="numeroaluno">Nº</label>
          </div>
      </div>
      </div>
      </div>
      <div>
      <div class="text-center pt-1 mb-5 pb-1">
        <div class="form-group">
                <input type="submit" class="btn1" value="CRIAR CONTA">
                <input type="reset" class="btn2" value="APAGAR DADOS">
        </div>
            <p class="login" >Já tem uma conta? <a href="login.php">Entre aqui</a>.</p> 
    </form>
</body>
</html>