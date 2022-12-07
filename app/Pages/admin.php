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
        <a class="logo" href="index.php"><img class="logo" src="../View/css/images/logoprincipal.png"></a>
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
    <svg  class="ondain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5bb318" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,80C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
    <!--FINAL DO MENU DE NAVEGAÇÃO-->
    <br>
    <a href="sair.php">Sair</a>
    <div class="titulo">Área administrativa</div>
    <div class="linha"></div>
    <?php
        echo "Olá: ". $_SESSION['nome_usuario'];    
    ?>
    <a href="../Model/oficinas/cad_oficina.php">
        <input class="img1" type="image" src="../View/css/images/skate.jpg">
    </a>
    <div class="texto1"> Aulas</div>

    <a href="../Model/eventos/cad_eventos.php">
        <input class="img2" type="image" src="../View/css/images/livro.jpg">
    </a>
    <div class="texto2"> Eventos</div>
                  <!--ULTIMA ONDA-->
                  <svg class="ondafin"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#5bb318" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,80C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg>
    <!--RODAPÉ-->
    <img id="logomarista" src="../View/css/images/logomarista.png">
</body>
</html>