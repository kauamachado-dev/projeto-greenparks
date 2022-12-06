<?php    
    session_start();

    //Inclui arquivo de conexão
    include('conexao.php');  

    //Define as variaveis
    $id = ['id_usuario'];
    $usuario = $_POST['nome_usuario'];  
    $senha = $_POST['senha_usuario'];  
    $tipo_usuario = ['id_tipo_usuario'];

    $usuario = stripcslashes($usuario);  
    $senha = stripcslashes($senha);  
    $usuario  = mysqli_real_escape_string($conexaoMysqli, $usuario);  
    $senha = mysqli_real_escape_string($conexaoMysqli, $senha);  
   
    $sql = "SELECT u.nome_usuario, u.senha_usuario, t.id_tipo_usuario FROM usuario u INNER JOIN tipo_usuario t ON u.id_tipo_usuario = t.id_tipo_usuario";  
    $result = mysqli_query($conexaoMysqli, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

    // Armazena dados em variáveis de sessão
    $_SESSION["logado"] = true;
    $_SESSION["id_usuario"] = $id;
    $_SESSION["nome_usuario"] = $usuario; 
    $_SESSION["id_tipo_usuario"] = $tipo_usuario;

    if($_SESSION['id_tipo_usuario'] == 1){
        header("Location: ../Pages/admin.php");
    }elseif($_SESSION['id_tipo_usuario'] == 2){
        header("Location: ../Pages/instrutor.php");
    }elseif($_SESSION['id_tipo_usuario'] == 3){
        header("Location: ../Pages/aluno.php");
    

    //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
    //redireciona o usuario para a página de login
   }else{    
    //Váriavel global recebendo a mensagem de erro
   $_SESSION['loginErro'] = "Usuário ou senha Inválido";
   header("Location: ../Controller/erro.php");
    }
?>  