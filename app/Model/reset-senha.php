<?php
// INICIA SESSÃO.
session_start();
 
// VERIFICA SE O USUARIO ESTA LOGADO, SE SIM, REDIRECIONA PARA PÁGINA DE LOGIN.
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// INCLUI ARQUIVO DE CONEXÃO.
require_once "config.php";
 
// DEFINE VARIAVEIS E DEFINE COMO VAZIO.
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// PROCESSA DADOS DO FORMULÁRIO, QUANDO FORMULÁRIO É ENVIADO.
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // VALIDA SENHA.
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Por favor insira a nova senha.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // VALIDA E CONFIRMA SENHA.
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, confirme a senha.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "A senha não confere.";
        }
    }
     
    //VERIFIQUE OS ERROS DE ENTRADA ANTES DE ATUAIZAR O BANCO DE DADOS.
    if(empty($new_password_err) && empty($confirm_password_err)){
        // PREPARA UMA DECLARAÇÃO SELECIONADA.
        $sql = "UPDATE usuario SET password = :password WHERE id = :id";
        
        if($stmt = $pdo->prepare($sql)){
            // VINCULA AS VARIÁVEIS A INSTRUÇÃO PREPARADA COMO PARÂMETROS.
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            
            // DEFINE PARÂMETROS.
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // TENTA EXECUTAR UMA DECLARAÇÃO PREPARADA.
            if($stmt->execute()){
                // SENHA ATUALIZADA. DESTROI SESSÃO E REDIRECIONA PARA PÁGINA DE LOGIN.
                session_destroy();
                header("location: login.php");
                exit();
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
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Redefinir senha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Redefinir senha</h2>
        <p>Por favor, preencha este formulário para redefinir sua senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>Nova senha</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirme a senha</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Redefinir">
                <a class="btn btn-link ml-2" href="welcome.php">Cancelar</a>
            </div>
        </form>
    </div>    
</body>
</html>