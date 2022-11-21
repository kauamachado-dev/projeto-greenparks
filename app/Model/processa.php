<?php      
    include('conexao.php');  
    $username = $_POST['nome_usuario'];  
    $password = $_POST['senha_usuario'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conexaoMysqli, $username);  
        $password = mysqli_real_escape_string($conexaoMysqli, $password);  
      
        $sql = "SELECT * FROM usuario WHERE nome_usuario = '$username' AND senha_usuario = '$password'";  
        $result = mysqli_query($conexaoMysqli, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Logado com sucesso! </center></h1>";  
        }  
        else{  
            echo "<h1> Login invalido! </h1>";  
        }     
?>  