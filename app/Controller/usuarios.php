<?php
//Arquivo com funções do login...

Class Usuario{ 
    //Para poder ser acessada por outros
    private $pdo; 
    public $msgErro = "";

    //Função que contém a conexão entre o banco de dados do login
    public function conectar($dbnome, $servidor, $usuario, $senha){ 
        //Para poder ser acessada
        global $pdo; 
        global $msgErro; 

        //Try catch: uma função que é feita pra tratar de erros e falhas como exceções
        try{ 
            //Fazendo a conexão com o banco
            $pdo =  new PDO("mysql:dbname=" . $dbnome . ";host=" . $servidor, $usuario, $senha);
        //Caso não der certo, será redirecionado ao bloco catch
        }catch (PDOException $e) {
            //Inserindo o erro dentro da variável
            $msgErro = $e->getMessage(); 
        }
    }

    //Função para poder cadastrar um novo funcionário/usuário
    public function cadastrar($nome_usuario, $username_usuario, $senha_usuario){
        //Para poder ser acessada
        global $pdo;
        global $msgErro;

        //Faz a pesquisa se já possui um usuário com esse username
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE username_usuario = :u");
        $sql->bindValue(":u",$username_usuario); 
        $sql->execute();

        //Se possuir, retorna falso e não cadastra
        if($sql->rowCount() > 0){
            return false;

        //Caso não, cadastra e retorna verdadeiro
        }else {
            //Faz uma inserção no banco com os dados que o usuário digitou
            $sql = $pdo->prepare("INSERT INTO usuarios (nome_usuario, username_usuario, senha_usuario) VALUES (:nu, :uu, :su)");

            //Substitui a variavel por abreviações
            $sql->bindValue(":nu",$nome_usuario); 
            $sql->bindValue(":uu",$username_usuario); 
            $sql->bindValue(":su",md5($senha_usuario)); 
            $sql->execute();

            //Foi cadastrado com sucesso
            return true;
        }
    }

    //Função para logar
    public function logar($usuario, $senha){
        //Para poder ser acessada
        global $pdo; 
        global $msgErro;

        //Verifica se o nome de usuário e a senha estao cadastrados
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE username_usuario = :u AND senha_usuario = :s");
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
            $verificar = $pdo->query("SELECT * FROM usuarios WHERE id_usuario = '$_SESSION[id_usuario]'");
            //Estrutura de repetição, sendo criado um array dos dados do usuário 
            while($linha = $verificar->fetch(PDO::FETCH_ASSOC)){
                //Se os IDS forem igual
                if($linha['id_usuario'] == $_SESSION['id_usuario']){ 

                    $nivel  = $linha['nivel_usuario']; //Variável recebendo o nivel de usuário
                    $status = $linha['status_usuario'];//Variável recebendo o status do usuário

                    //Estrutura de decisão sobre o nível e o status do usuário
                    switch ($nivel && $status){

                        //Funcionário(a) ativo
                        case ($nivel == 0 && $status == 1):
                            //Manda para a página dos funcionários
                            header("location: ../../../resources/View/Pages/funcionario.php");
                        break;

                        //Administrador ativo
                        case ($nivel == 1 && $status == 1):
                            //Manda para a página dos administradores
                            header("location: ../../../resources/View/Pages/administrador.php");
                        break;

                        //Funcionário(a) inativo
                        case ($nivel == 0 && $status == 0):
                            echo "Usuário sem aceso!";
                        break;

                        //Administrador inativo
                        case ($nivel == 1 && $status == 0):
                            echo "Administrador sem acesso!";
                        break;

                        //Caso não cair em nenhum dos casos
                        default:
                            //Manda um alerta
                            echo "<script>alert('Usuario sem acesso!');</script>";
                            //E manda para a página de login novamente
                            header("location: login.php");
                        break;
                    }

                    $_SESSION['nivel_usuario']  = $nivel;
                    $_SESSION['status_usuario'] = $status;
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
}

?>