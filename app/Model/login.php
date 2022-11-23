<!-- Página de login -->
<?php
session_start();

//chamando o arquivo usuarios.php
require_once '../Controller/usuarios.php';
//require_once '../Controller/nivel.php';

// Chama nivel de acesso
//Nivel();

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
</html>