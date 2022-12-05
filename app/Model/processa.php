<?php    
    session_start();

    //Inclui arquivo de conexão
    include('conexao.php');  

    //$id = $_POST['id_usuario']
    $usuario = $_POST['nome_usuario'];  
    $senha = $_POST['senha_usuario'];  
      
        $usuario = stripcslashes($usuario );  
        $senha = stripcslashes($senha);  
        $usuario  = mysqli_real_escape_string($conexaoMysqli, $usuario );  
        $senha = mysqli_real_escape_string($conexaoMysqli, $senha);  
      
        $sql = "SELECT * FROM usuario WHERE nome_usuario = '$usuario' AND senha_usuario = '$senha'";  
        $result = mysqli_query($conexaoMysqli, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        // Armazena dados em variáveis de sessão
        $_SESSION["logado"] = true;
        $_SESSION["id_usuario"] = $id;
        $_SESSION["nome_usuario"] = $usuario ; 

        $nivel  = $linha['tipo_usuario']; //Variável recebendo o nivel de usuário
                    $status = $linha['descricao'];//Variável recebendo o status do usuário

                    //Estrutura de decisão sobre o nível e o status do usuário
                    switch ($nivel && $status){

                        //Administrador ativo
                        case ($nivel == 1 && $status == 1):
                            //Manda para a página dos administradores
                            header("location: ../Pages/admin.php");
                        break;

                        //Funcionário(a) ativo
                        case ($nivel == 0 && $status == 2):
                            //Manda para a página dos instrutores
                            header("location: ../Pages/instrutor.php");
                        break;
                    }
       
?>  