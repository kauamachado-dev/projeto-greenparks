<?php 
//Página principal dos funcionários, assim que sair do login, serão redirecionados pra cá...

//Inclui a conexão
include '../Model/conexao.php';

//inicia a sessão
session_start(); 

//Se não estiver logado
if (!isset($_SESSION['id_usuario']) || !isset($_SESSION['tipo_usuario'])) {
    //Realoca para o login
    header("location: ../Model/login.php");
    exit;

//Se for um administrador
} else if ($_SESSION['tipo_usuario'] != 0) {
    //Realoca para a pagina de administrador
    header("location: administrador.php");

//Se estiver logado
} else if ($_SESSION['descricao'] != 1) {
    //Exibe um alert e realoca para a pagina de login
    echo "<script>alert('Usuário sem acesso!');</script>";
    header("location: ../Model/login.php");
    exit;
}
//SE A PAGINA ESTIVER SENDO IMPEDIDA DE ABRIR COMENTE ESSAS LINHAS DE CODIGO ACIMA !!!!!
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>PROFESSOR</title>
    <link href='../View/css/tela-prof.css' rel='stylesheet'>
</head>
<body>
     <!--ÍNICIO DO MENU DE NAVEGAÇÃO-->
     <header>
        <nav>
            <a class="logo" href="index.php">GREEN PARKS</a>
            <ul class="nav-list">
                <li><a style="color: #ffe60b" href="index.php">INÍCIO</a></li>
                <li><a href="sobre.php">SOBRE</a></li> 
                <li><a href="aula.php">AULAS</a></li> 
                <li><a href="evento.php">EVENTOS</a></li>     
            </ul>
        </nav>
    </header> 
    <!--FINAL DO MENU DE NAVEGAÇÃO-->
    <h1 class="my-5">Oi, <b><?php echo htmlspecialchars($_SESSION["nome_usuario"]); ?></b>
    <div class="titulo">Área do Professor</div>
    <div class="linha"></div>
    <a href="aula.html">
        <input class="img1" type="image" src="_css/_images/adm_aula.jpg">
    </a>
    <div class="texto1"> Aulas</div>
    <a href="evento.html">
        <input class="img2" type="image" src="_css/_images/evento.png">
    </a>
    <div class="texto2">Eventos</div>
</body>
</html>