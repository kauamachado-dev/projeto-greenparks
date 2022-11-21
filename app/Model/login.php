<!-- Página de login -->
<?php
//chamando o arquivo usuarios.php
require_once '../Controller/usuarios.php';

//Chama a classe
$u = new Usuario; 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../View/css/login.css" rel="stylesheet">
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
                                        <form action="processa.php" method="POST">
                                            <!-- USUÁRIO -->
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="nome_usuario" required name="nome_usuario" maxlength="75" placeholder="Digite o usuário">
                                                <label for="usuario">Usuário <i class="fas fa-user"></i> </label>
                                            </div>
                                            <!-- SENHA -->
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="senha_usuario" required name="senha_usuario" maxlength="75" placeholder="Digite a senha">
                                                <label for="senha"> Senha <i class="fas fa-key"></i> </label>
                                            </div>  
                                            <!-- BOTÃO -->
                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <input type="submit" value="ACESSAR" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 mt-4">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                        <h4 class="mb-4">BEM VINDO</h4>
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