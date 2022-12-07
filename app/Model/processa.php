<?php    
    session_start();

    //Inclui arquivo de conexão
    include('conexao.php');  

    //verifica se os campos preenchidos estao no banco, se nao retorna pro login
    if(empty($_POST['nome_usuario']) || empty($_POST['senha_usuario'])) {
        header('Location: ../Model/login.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexaoMysqli, $_POST['nome_usuario']);
    $senha = mysqli_real_escape_string($conexaoMysqli, $_POST['senha_usuario']);

   
<<<<<<< HEAD
    $sql = "SELECT id_usuario, u.nome_usuario, u.senha_usuario, t.id_tipo_usuario FROM usuario u INNER JOIN tipo_usuario t ON u.id_tipo_usuario = t.id_tipo_usuario";  
    $result = mysqli_query($conexaoMysqli, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
=======
    $sql = "SELECT nome_usuario, senha_usuario, id_tipo_usuario FROM usuario INNER JOIN tipo_usuario ON id_tipo_usuario = id_tipo_usuario";  

    $result = mysqli_query($conexaoMysqli, $sql);
    $row = mysqli_num_rows($result);  
>>>>>>> 54b66fd05a12faba5dbd07d8e794e3d71b47e593

    // Armazena dados em variáveis de sessão
    $_SESSION["logado"] = true;
    $_SESSION["id_usuario"] = $id;
    $_SESSION["nome_usuario"] = $usuario; 
    $_SESSION["id_tipo_usuario"] = $tipo_usuario;

    //se não estiver definida, não possuir um id_usuario ou um status_usuario
    if ($_SESSION['id_tipo_usuario'] = 1){
        //vai mandar ele devolta para a página de login
        header("location: ../Pages/admin.php"); 
        //Se o usuario for funcionario
    } else if ($_SESSION['id_tipo_usuario'] = 2){
        //Realoca o usuario para o funcionario
        header("location: ../Pages/instrutor.php");
    //Se o usuario estiver inativo
    } else if ($_SESSION['id_tipo_usuario'] = 3){
        //Realoca para a pagina do login
        header("location: ../Pages/aluno.php");
    exit;
     //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
    //redireciona o usuario para a página de login
    }else{    
    //Váriavel global recebendo a mensagem de erro
   $_SESSION['loginErro'] = "Usuário ou senha Inválido";
   header("Location: ../Controller/erro.php");
    }
?>  