<?php
// Incluir arquivo de configuração
require_once "conexao.php";
 
// Defina variáveis e inicialize com valores vazios
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nome de usuário
    if(empty(trim($_POST["nome_usuario"]))){
        $username_err = "Por favor coloque um nome de usuário.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["nome_usuario"]))){
        $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
    } else{
        // Prepare uma declaração selecionada
        $sql = "SELECT id_usuario FROM usuario WHERE nome_usuario = :u";
        
        if($stmt = $conexaoMysqli->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":u", $param_username, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = trim($_POST["nome_usuario"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "Este nome de usuário já está em uso.";
                } else{
                    $username = trim($_POST["nome_usuario"]);
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Validar senha
    if(empty(trim($_POST["senha_usuario"]))){
        $password_err = "Por favor insira uma senha.";     
    } elseif(strlen(trim($_POST["senha_usuario"])) < 6){
        $password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $password = trim($_POST["senha_usuario"]);
    }
    
    // Verifique os erros de entrada antes de inserir no banco de dados
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare uma declaração de inserção
        $sql = "INSERT INTO usuario (nome_usuario, senha_usuario) VALUES (:u, :p)";
         
        if($stmt = $conexaoMysqli->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":u", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":p", $param_password, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Redirecionar para a página de login
                header("location: login.php");
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($conexaoMysqli);
}
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
      <div class="col">
      <div class="single-input">
          <input required type="address" name="rua_endereco" id="rua" class="input"placeholder="Informe seu endereço...">
          <label for="bairro">RUA</label>
      </div>
      </div>
      <div class="row">
      <div class="col">
      <div class="single-input">
          <input required type="address" name="bairro_endereco" id="bairro" class="input"placeholder="Informe seu bairro...">
          <label for="bairro">Bairro</label>
      </div>
      </div>
      <div class="col">
          <div class="single-input">
              <input required type="number" name="num_casa_endereco" id="numeroaluno" class="input" placeholder="Número de sua casa...">
              <label for="numeroaluno">Nº</label>
          </div>
      </div>
      </div>
      </div>
      <div>
      <div class="text-center pt-1 mb-5 pb-1">
        <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Criar Conta">
                <input type="reset" class="btn btn-secondary ml-2" value="Apagar Dados">
        </div>
            <p>Já tem uma conta? <a href="login.php">Entre aqui</a>.</p> 
    </form>
</body>
</html>