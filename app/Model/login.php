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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <!-- LOGIN  --> 
    <title>Login</title>
    </head>
    <body id="body">
        <!-- TELA DE LOGIN -->
        <section class="h-100 gradient-form">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <!-- FORMULÁRIO -->
                                        <form method="POST" action="processa.php">
                                            <!-- USUÁRIO -->
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="nome_usuario" required name="usuario" maxlength="75" placeholder="Digite o usuário">
                                                <label for="usuario">Usuário <i class="fas fa-user"></i> </label>
                                            </div>
                                            <!-- SENHA -->
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="senha_usuario" required name="senha" maxlength="75" placeholder="Digite a senha">
                                                <label for="senha"> Senha <i class="fas fa-key"></i> </label>
                                                <div id="olho"><abbr title="Mostrar senha" id="##"><i class="fas fa-eye-slash" id="btn-eye" onclick="mostrar()"></i></abbr></div>
                                            </div>
                                            <!-- BOTÃO -->
                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <input type="submit" value="ACESSAR" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 mt-4">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                        <h4 class="mb-4">BEM VINDO</h4>
                                        <p class="mb-4">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>