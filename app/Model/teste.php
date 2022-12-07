<?php    

    //Inclui arquivo de conexão
    include('conexao.php');  

    $username = $_POST['nome_usuario'];  
    $password = $_POST['senha_usuario'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conexaoMysqli, $username);  
        $password = mysqli_real_escape_string($conexaoMysqli, $password);  
      
        $sql = "SELECT * FROM usuario WHERE nome_usuario = '$username' AND senha_usuario = '$password'";  
        $resultado = mysqli_query($conexaoMysqli, $sql);  
        $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);  
        $contador = mysqli_num_rows($resultado);  

        // Armazena dados em variáveis de sessão
        $_SESSION["logado"] = true;
        $_SESSION["id_usuario"] = $id;
        $_SESSION["nome_usuario"] = $username; 

        // Se o usuario estiver ativo mande para pagina de inicio
        if($contador == 1){  
            header("location: ../Pages/index.php"); 
            //Se não da um alert e exibe mensagem de erro
        }else{  
            echo "<script>alert('Usuario ou senha incorretos!');</script>";
            header("location: login.php");
        }
?>  