<?php
    //Página principal pro adm, depois de fazer login será encaminhado pra cá...

    //Inclui o arquivo de conexao
    include '../Model/conexao.php';

    //inicia a sessão
    session_start(); 

    //se não estiver definida, não possuir um id_usuario ou um status_usuario
    if (!isset($_SESSION['id_usuario']) || !isset($_SESSION['id_tipo_usuario'])){
        //vai mandar ele devolta para a página de login
        header("location: ../Model/login.php"); 
    exit;
        //Se o usuario for funcionario
    } else if ($_SESSION['id_tipo_usuario'] != 1) {
        //Realoca o usuario para o funcionario
        header("location: ../Pages/instrutor.php");
    //Se o usuario estiver inativo
    } else if ($_SESSION['id_tipo_usuario'] != 1) {
        //Realoca para a pagina do login
        header("location: ../Pages/aluno.php");
    exit;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>ADMINISTRADOR</title>
    <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
    <link href='../View/css/admin.css' rel='stylesheet'>
    <script src='_js/postagem.js'></script>
</head>
<body>
     <!--ÍNICIO DO MENU DE NAVEGAÇÃO-->
     <header>
        <nav>
            <a class="logo" href="index.php"><img src="../View/css/images/logo.png" style="width: 6%">GREEN PARKS</a>
            <ul class="nav-list">
                <li><a href="../Controller/sair.php" class="btn btn-danger ml-3">Sair da conta</a></li>
                <li><a style="color: #ffe60b" href="index.php">INÍCIO</a></li>
                <li><a href="sobre.php">SOBRE</a></li> 
                <li><a href="aula.php">AULAS</a></li> 
                <li><a href="evento.php">EVENTOS</a></li> 
                <!--<a href="../Model/login.php"><img src="../View/css/images/icone_user.png" style="z-index: 0; width: 50%;">olá, faça login ou cadastre-se!</a>-->
            </ul>
        </nav>
    </header> 
    <!--FINAL DO MENU DE NAVEGAÇÃO-->
    <br>
    <a href="sair.php">Sair</a>
    <div class="titulo">Área administrativa</div>
    <div class="linha"></div>
    <?php
        echo "Olá: ". $_SESSION['nome_usuario'];    
    ?>
    <a href="../Model/oficinas/cad_oficina.php">
        <input class="img1" type="image" src="../View/images/adm_aula.jpg">
    </a>
    <div class="texto1"> Aulas</div>

    <a href="../Model/eventos/cad_eventos.php">
        <input class="img2" type="image" src="../View/images/evento.png">
    </a>
    <div class="texto2"> Eventos</div>
</body>
</html>