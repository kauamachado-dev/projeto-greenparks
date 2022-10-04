<?php 

    class Usuario{

        public function login($email, $senha){
            global $pdo;

            $sql = $pdo->prepare("SELECT * FROM usuario WHERE email_usuario = :email AND senha_usuario = :senha");
            $sql->bindValue("email, $email");
            $sql->bindValue("senha, $senha");
            $sql->execute();
        
    
            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

                $_SESSION['idUser'] = $dado['id_usuario'];
                return true;

                }else{
                    return false;
                }
            }
        }  
    }
?>  
<h1>Login</h1>

<?php/*
$dado = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['SendLogin'])) {
    //var_dump($dados);
    $query_usuario = "SELECT email_usuario, senha_usuario,
                    FROM usuarios 
                    WHERE usuario =:usuario  
                    LIMIT 1";
    $result_usuario = $conn->prepare($query_usuario);
    $result_usuario->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);
    $result_usuario->execute();

    if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
        $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
        //var_dump($row_usuario);
        if(password_verify($dados['senha_usuario'], $row_usuario['senha_usuario'])){
            $_SESSION['id_usuario'] = $row_usuario['id_usuario'];
            $_SESSION['nome'] = $row_usuario['nome'];
            header("Location: dashboard.php");
        }else{
            $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
        }
    }else{
        $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
   }*/