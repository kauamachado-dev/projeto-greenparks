<?php    

    //Inclui arquivo de conexão
    include('conexao.php');  
    
    //chamando o arquivo de usuarios
    require_once '../Controller/usuarios.php';

    //Chama a classe
    $u = new Usuario; 

    $username = $_POST['nome_usuario'];  
    $password = $_POST['senha_usuario'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conexaoMysqli, $username);  
        $password = mysqli_real_escape_string($conexaoMysqli, $password);  
      
        $sql = "SELECT * FROM usuario WHERE nome_usuario = '$username' AND senha_usuario = '$password'";  
        $result = mysqli_query($conexaoMysqli, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        // Armazena dados em variáveis de sessão
        $_SESSION["logado"] = true;
        $_SESSION["id_usuario"] = $id;
        $_SESSION["nome_usuario"] = $username; 

        // Se o usuario existir mande para pagina de inicio
        if($count == 1){  
            header("location: ../Pages/index.php"); 
            //Se não da um alert e exibe mensagem de erro
        }else{  
            echo "<script>alert('Usuario ou senha incorretos!');</script>";
            header("location: login.php");
        }
?>  