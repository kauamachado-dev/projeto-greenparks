<?php
    require_once '../Controller/usuarios.php'; //CHAMA O ARQUIVO DE USUÁRIOS.

    //CHAMA CLASSE.
    $u = new Usuario; 
?>                                 <!-- PHP -->
    <?php
        //se a variavel estiver definida
        if (isset($_POST['nome_usuario'])) { 
            //Variaveis recebem os valores
            $usuario = addslashes($_POST['nome_usuario']); 
            $senha   = addslashes($_POST['senha_usuario']);    
                //se as variáveis não estiverem vazias
                 if (!empty($usuario) && !empty($senha)) { 
                    //conecta com o banco
                    $u->conectar("greenpark", "localhost", "root", "");
                        //se não apresentar nenhuma mensagem de erro
                        if ($u->msgErro == "") {
                            //Se as informações estiverem erradas
                            if (!$u->logar($usuario, $senha)) {
    ?>
                                <div class="text-center p-3 mb-2 bg-danger text-black bg-opacity-75 rounded">
                                    <?php echo "Credenciais incorretas!"; ?>
                                </div>
                                <?php
                            }
                                    //caso existir algum erro, vai apresentar na tela  
                                    } else { 
                                ?>
                                    <div class="text-center p-3 mb-2 bg-danger text-black bg-opacity-75 rounded">
                                        <?php echo "Erro: " . $u->msgErro; ?>
                                    </div>
                                        <?php
                                            }

                                        //se o usuário deixar algum campo vazio...   
                                        } else { 
                                            ?>
                                            <div class="text-center p-3 mb-2 bg-danger text-black bg-opacity-75 rounded">
                                                <?php echo "Preencha todos os campos obrigatórios!"; ?>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <!-- Fim do PHP -->
                                </div>
                            </div>

                                <!-- HTML  --> 
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="../View/css/login.css" rel="stylesheet">
    </head>
    <!-- LOGIN  --> 
    <title>Login</title>
    </head>
    <body>
        <!-- TELA DE LOGIN -->
                                    <div class="container">
                                    <div class="card">
                                    <div class="titulo1">INSTRUTOR</div>
                                        <!-- FORMULÁRIO -->
                                        <form method="POST" action="processa.php">
                                            <!-- USUÁRIO -->
                                            <div class="label-float">
                                                <input type="text" class="form-control" id="nome_usuario" required name="usuario">
                                                <label for="usuario">Usuário </label>
                                            </div>
                                            <!-- SENHA -->
                                            <div class="label-float">
                                                <input type="password" class="form-control" id="senha_usuario" required name="senha">
                                                <label for="senha"> Senha  </label>
                                                <div id="olho"><abbr title="Mostrar senha" id="##"><i class="fas fa-eye-slash" id="btn-eye" onclick="mostrar()"></i></abbr></div>
                                            </div>
                                            <!-- BOTÃO -->
                                            <div class="btn">
                                                <a type="submit" value="ACESSAR" class="btn1"> ACESSAR </a>
                                            </div>
                                            <div>
                                                <hr>
                                            </div>
                                            <p> Não tem uma conta?
                                                <a href=''> Cadastre-se! </a>
                                        </form>
                                    </div>
                                    </div>
                                    </div>

        </section>
    </body>
</html>