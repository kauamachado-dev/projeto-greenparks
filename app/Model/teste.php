<?php    

    //Inclui arquivo de conexão
    include('conexao.php');  

    $id = $_POST['id_usuario'];
    $username = $_POST['nome_usuario'];  
    $password = $_POST['senha_usuario'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conexaoMysqli, $username);  
        $password = mysqli_real_escape_string($conexaoMysqli, $password);  
      
        $sql = "SELECT id_usuario, nome_usuario FROM usuario WHERE nome_usuario = '$username' AND senha_usuario = '$password'";  
        $resultado = mysqli_query($conexaoMysqli, $sql);  
        $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);  
        $contador = mysqli_num_rows($resultado);  

        while($linha = $verificar->fetch(PDO::FETCH_ASSOC)){
            //Se os IDS forem igual
            if($linha['id_usuario'] == $_SESSION['id_usuario']){
            }
        }
        
        // Armazena dados em variáveis de sessão
        $_SESSION["logado"] = true;
        $_SESSION["id_usuario"] = $id;
        $_SESSION["nome_usuario"] = $username; 

        // Se o usuario estiver ativo mande para pagina de inicio
        if($contador == 1){  
            header("location: ../Pages/index.php"); 
            //Se não da um alert e exibe mensagem de erro
        }else{  
            header("location: ../Controller/erro.php");
            echo "<script>alert('Usuario ou senha incorretos!');</script>";
        }
?>  