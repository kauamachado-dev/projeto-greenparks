<?php
// INICIA SESSÃO.
session_start();
 
// VERIFICA SE O USUÁRIO ESTÁ LOGADO, SE SIM, REDIRECIONA PARA PAGINA DE BEM VINDO.
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// INCLUI ARQUIVO DE CONEXÃO.
require_once "config.php";
 
// DEFINA AS VARIAVEIS E INICIA COMO VAZIAS.
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// PROCESSA OS DADOS DO FORMULÁRIO, QUANDO O FORMULÁRIO É ENVIADO.
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // VERIFICA SE O NOME DE USUÁRIO ESTÁ VAZIO.
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor, insira o nome de usuário.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // VEREFICA SE A SENHA ESTÁ VAZIA
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, insira sua senha.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // VALIDA AS CREDENCIAIS.
    if(empty($username_err) && empty($password_err)){
        // PREPARA UMA DECLARAÇÃO SELECIONADA.
        $sql = "SELECT id, username, password FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // VINCULA AS VARIÁVEIS a INSTRUÇÃO PREPARADA COMO PARÂMETROS.
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // DEFINE PARAMETROS.
            $param_username = trim($_POST["username"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // VERIFICA SE O NOME DE USUÁRIO EXISTE, SE SIM, VERIFICA A SENHA.
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // SENHA CORRETA, INICIA SESSÃO.
                            session_start();
                            
                            // ARMAZENA DADOS EM VARIÁVEIS DE SESSÃO.
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // REDIRECIONA O USUÁRIO PARA PÁGINA DE BEM VINDO.
                            header("location: welcome.php");
                        } else{
                            // A SENHA É INVALIDA, EXIBE UMA MENSAGEM DE ERRO.
                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else{
                    // O NOME DE USUÁRIO É INVALIDO, EXIBE MENSAGEM DE ERRO.
                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // FECHA DECLARAÇÃO.
            unset($stmt);
        }
    }
    
    // FECHA CONEXÃO.
    unset($pdo);
}
?>
 <!-- HTML  --> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Por favor, preencha os campos para fazer o login.</p>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
         <!-- FORMULÁRIO  --> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome do usuário</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
            <p>Não tem uma conta? <a href="register.php">Inscreva-se agora</a>.</p>
        </form>
    </div>
</body>
</html>