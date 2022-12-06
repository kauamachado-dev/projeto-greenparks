<?php
//Função para logar
	function logar($usuario, $senha){
        //Para poder ser acessada
        global $pdo; 
        global $msgErro;

        //Verifica se o nome de usuário e a senha estao cadastrados
        $sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE nome_usuario = :u AND senha_usuario = :s");
        $sql->bindValue(":u",$usuario); //basicamento o bindValue ele meio que abrevia, o $usuario virou: :u...
        $sql->bindValue(":s",md5($senha)); // a $senha virou: :s. E o md5, basicamente criptografa a senha do usúario, dando mais segurança...
        $sql->execute(); //vai executar...

        //Se sim, vai para uma estrutura para identificar se é um usuário ou administrador
        if($sql->rowCount() > 0){
            //Faz um array com a variável
            $dado = $sql->fetch();
            //inicia a sessão
            session_start();
            //Fazendo uma variável global, que recebe o id_usuario
            $_SESSION['id_usuario'] = $dado['id_usuario'];

            //Cria uma variável que seleciona tudo da tabela usuarios quando o id for igual a do $_SESSION
            $verificar = $pdo->query("SELECT u.*, t.* FROM usuario u INNER JOIN tipo_usuario t ON u.id_tipo_usuario = t.id_tipo_usuario");
            //Estrutura de repetição, sendo criado um array dos dados do usuário 
            while($linha = $verificar->fetch(PDO::FETCH_ASSOC)){
                //Se os IDS forem igual
                if($linha['id_usuario'] == $_SESSION['id_usuario']){ 

                    $nivel  = $linha['id_tipo_usuario']; //Variável recebendo o nivel de usuário
                    $status = $linha['tipo_usuario'];//Variável recebendo o status do usuário

                    //Estrutura de decisão sobre o nível e o status do usuário
                    switch ($nivel && $status){

						//Administrador ativo
                        case ($nivel == 1 && $status == 1):
                            //Manda para a página dos administradores
                            header("location: ../Pages/admin.php");
                        break;

                        //Funcionário(a) ativo
                        case ($nivel == 2 && $status == 1):
                            //Manda para a página dos instrutores
                            header("location: ../Pages/instrutor.php");
                        break;

                        //Caso não cair em nenhum dos casos
                        default:
                            //Manda um alerta
                            echo "<script>alert('Usuario sem acesso!');</script>";
                            //E manda para a página de login novamente
                            header("location: ../Model/login.php");
                        break;
                    }

                    $_SESSION['id_tipo_usuario']  = $nivel;
                    $_SESSION['tipo_usuario'] = $status;
                }
            }

            //Retorna verdadeiro
            return true;

        //Se não foi possível logar
        } else{
            //Retorna falso
            return false; 
        }
    }