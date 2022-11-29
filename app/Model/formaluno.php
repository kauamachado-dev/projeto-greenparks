<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>FORMULÁRIO</title>
  <script src='_js/controlle-aluno.js'></script>
  <link href="../View/css/formaluno.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>  

    <img id="back" src="../View/css/images/formfund.png">
    <div class="titulo1">ALUNO</div>
    <div class="linha1"></div>

  <form action="cad_aluno.php" method="POST">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="single-input">
            <input required type="text" name="nome_usuario" id="nome" class="input" placeholder="Nome do aluno...">
            <label for="nome">Nome</label>
          </div>
        </div>
        <div class="col">
          <div class="single-input">
            <input required type="text" name="sobrenome_usuario" id="datanascaluno" class="input" placeholder="Sobrenome do aluno...">
            <label for="datanascaluno">Sobrenome</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="single-input">
            <input required type="date" name="nasc_usuario" id="datanascaluno" class="input" placeholder="CPF do aluno...">
            <label for="cpfaluno">Data de nascimento</label>
          </div>
        </div>
        <div class="col">
          <div class="single-input">
            <input required type="cpf" name="cpf_usuario" id="cpfaluno" class="input" placeholder="CPF do aluno...">
            <label for="cpfaluno">CPF Aluno</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="single-input">
            <input required type="text" name="nome_responsavel" id="nomeresponsavel" class="input" placeholder="Nome do responsável...">
            <label for="nomeresponsavel">Nome do Responsável</label>
          </div>
        </div>
        <div class="col">
          <div class="single-input">
            <input required type="tel" name="sobrenome_responsavel" id="telefonealuno" class="input" placeholder="Sobrenome do responsavel">
            <label for="telefonealuno">Sobrenome do responsavel</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="single-input">
            <input required type="cpf" name="cpf_responsavel" id="cpfresponsavel" class="input" placeholder=" CPF do responsável">
            <label for="cpfresponsavel">CPF Responsável</label>
          </div>
        </div> 
        <div class="col">
          <div class="single-input">
            <input required type="cpf" name="fone_usuario" id="telefonealuno" class="input" placeholder="Número para contato">
            <label for="cpfresponsavel">Telefone</label>
          </div>
        </div>     
      </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="single-input">
            <input required type="email" name="email_usuario" id="emailaluno" class="input" placeholder="Seu e-mail...">
            <label for="emailaluno">E-mail</label>
          </div>
        </div>
        <div class="col">
          <div class="single-input">
            <input required type="password" name="senha_usuario" id="senhaaluno" class="input" placeholder="Uma senha...">
            <label for="senhaaluno">Senha</label>
          </div>
        </div>
      </div>
    </div>
<div>
<div>
<div class="text-center pt-1 mb-5 pb-1">
<div class="form-group">
<input type="submit" class="btn1" value="CRIAR CONTA">
<input type="reset" class="btn2" value="APAGAR DADOS">
</div>
<p class="login" >Já tem uma conta? <a href="login.php">Entre aqui</a>.</p> 
</div> 
</form>
</body>
</html>