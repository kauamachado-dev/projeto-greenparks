<html>
    <head>
        <link rel="shortcut icon" href="App/View/images/thumbnail_TecnoListLogo.png" type="image/x-icon">
    </head>
</html>
<?php
    require_once('app/View/pages/index.html');
    require_once('app/Model/classes/usuarios.php');
    require_once('app/Controller/msg.php');
    $u = new Usuario;

         //Verificar se clicou no botao
         if(isset($_POST['nome_usuario']))
        {
            // Determinados campos recebe valor das inputs
             $nome = addslashes($_POST['nome_usuario']);
             $senha = addslashes($_POST['senha_usuario']);
              // addslashes = A função addslashes foi por algum tempo uma solução eficaz para escapar determinados caracteres na inserção de dados em banco de dados

             //verificar se está vazio
             if(!empty($nome) && !empty($senha))
            {
                $u->conectar("greenpark","localhost","root",""); //conectar com o banco
                if ($u->msgErro == "") //verificar erro
                {
                    if(!$u->logar($nome, $senha));
                    {
                        echo msgErro('');
                    }
                }
                else
                {
                    echo "Erro: " . $u->msgErro;  
                }
            }
            else
            {
                echo "<script>alert('Preencha todos os campos obrigatórios!!')</script>";
            }   
            
            
        }
?>