<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>ÍNICIO</title>
    <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
    <link href="../View/css/stilo.css" rel="stylesheet">
</head>
<body>
    <!--ÍNICIO DO MENU DE NAVEGAÇÃO -->
    <header>
        <nav>
            <a class="logo" href="index.php"><img src="../View/css/images/logoprincipal.png" style="width: 16%"></a>
            <ul class="nav-list">
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
    <section></section>
    <section class="container">
        <div class="titulo1">GREEN 
                             PARKS</div>
    </section>
    <div>
        <!-- ONDA -->
        <svg  class="onda1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
             fill="#FFFF"
             fill-opacity="1"
             d="M0,160L60,144C120,128,240,96,360,106.7C480,117,600,171,720,213.3C840,256,960,288,1080,288C1200,288,1320,256,1380,240L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </div>
    <!-- TEXTO E SEÇÃO NÓS!-->
    <section class="container">
        <div id="titulo2">SOBRE NÓS</div>
    </section>
        <div class="linha1"></div>
        <div class="sobre">
            <P>O Green Parks é um projeto que surgiu com</P>
            <p>um grupo de estudantes da Escola</p>
            <p>Marista Ir. Acácio.</p>
            <p>Nosso projeto tem como objetivo oferecer</p>
            <p>aulas gratuitas de esportes para as pessoas.</p>
            <p>Também divulgamos eventos próximos a</p>
            <p>região norte de Londrina.</p>
        </div>
        <!-- ONDA -->
        <svg class="onda2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff"
             fill-opacity="1"
             d="M0,192L80,197.3C160,203,320,213,480,186.7C640,160,800,96,960,80C1120,64,1280,96,1360,112L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
        </svg>
        <a href="sobre.php" type="button" class="botao1">SAIBA MAIS</a>
    <!-- TEXTO E SEÇÃO AULAS!-->
  <section></section>
    <svg class="onda3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FFFF"
         fill-opacity="1"
         d="M0,192L80,197.3C160,203,320,213,480,186.7C640,160,800,96,960,80C1120,64,1280,96,1360,112L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg>
    <section class="container">
      <div id="titulo3">AULAS</div>
    </section>
        <div class="linha2"></div>
        <div class="aulas">
            <P>  As aulas serão oferecidas à população</P>
            <P>   gratuitamente. Isso vai acontecer de</P>
            <P>      forma segura e confiável, onde os</P>
            <P>instrutores vão ter contato com os pais</P>
            <P>dos alunos, se ocorrer algum imprevisto</P>
            <P>            sempre entrarão em contato.</P>
        </div>
        <!-- EFEITO CARROSSEL -->
        <div id ="sliderau">
        <img class = "selectedau" src="../View/css/images/handeball.jpg" alt="image1">
        <img src="../View/css/images/handeball.jpg" alt="image2">
        <img src="../View/css/images/futebol.jpg" alt="image3">
        <img src="../View/css/images/volei.png" alt="image4">
        <img src="../View/css/images/basquete.jpg" alt="image5">
    </div>
    <script src="../controller/_js/slider.js"></script>
    <svg class="onda4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
        fill="#ffff"
        fill-opacity="1" d="M0,224L60,197.3C120,171,240,117,360,117.3C480,117,600,171,720,197.3C840,224,960,224,1080,202.7C1200,181,1320,139,1380,117.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
</svg>
            <a href="aula.php" type="button" class="botao2">SAIBA MAIS</a>
    <!-- TEXTO E SEÇÃO SOBRE EVENTOS!-->
    <section></section>
    <svg  class="onda5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
         fill="#FFFF"
         fill-opacity="1" d="M0,224L60,197.3C120,171,240,117,360,117.3C480,117,600,171,720,197.3C840,224,960,224,1080,202.7C1200,181,1320,139,1380,117.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
</svg>
    <section></section>
    <section class="container"></section>
        <div id="titulo4">EVENTOS</div>
        <div class="linha3"></div>
        <div class="eventos">
            <P>Se você está afim de ficar por dentro dos</P>
            <P>eventos que vão acontecer na sua região,</P>
            <P>clique no botão para conhecer nossa página</P>
            <P>de eventos e não perder mais nada que rolar</P>
            <P>por perto!</P></div>
            <a href="../Pages/evento.php" type="button" class="botao3">SAIBA MAIS</a>
            <!-- EFEITO SLIDER EVENTOS -->
            <div id ="sliderev">
                <img class = "selectedev" src="../View/css/images/feira.jpg" alt="image1">
                <img src="../View/css/images/feira.jpg" alt="image2">
                <img src="../View/css/images/circo.jpg" alt="image3">
                <img src="../View/css/images/livro.jpg" alt="image4">
                <img src="../View/css/images/basquete.jpg" alt="image5">
            </div>
    <script src="../controller/_js/sliderev.js"></script>
    <!-- FINAL EFEITO SLIDER -->
                 <!--ULTIMA ONDA-->
     <svg class="ondafin"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#5bb318" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,80C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg>
    <!--RODAPÉ-->
    <img id="logomarista" src="../View/css/images/logomarista.png">
    </section>
    <section></section>
 </body>