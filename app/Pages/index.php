<?php 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>HOME</title>
    <link href="../View/css/stilo.css" rel="stylesheet">
</head>
<body>
    <!--ÍNICIO DO MENU DE NAVEGAÇÃO -->
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
    <section></section>
    <section class="container">
        <div class="titulo1">GREEN PARKS</div>
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
            <path fill="#FFFF"
             fill-opacity="1"
             d="M0,192L80,197.3C160,203,320,213,480,186.7C640,160,800,96,960,80C1120,64,1280,96,1360,112L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
        </svg>
        <a href="app/Pages/aula.php" type="button" class="botao1">SAIBA MAIS</a>
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
            <P>As aulas serão oferecidas à população de</P>
            <P>forma gratuita, para que todos tenham acesso.</P>
            <P>Isso vai acontecer de forma segura e</P>
            <P>confiável, onde os instrutores vão ter</P>
            <P>acesso ao contato com os pais dos alunos </P>
            <P>menores de idade, e caso ocorra algum</P>
            <P>imprevisto sempre entrarão em contato.</P>
        </div>
        <!-- EFEITO CARROSSEL -->
        <div id ="slider">
        <img class = "selected"src="../View/css/images/img1.png" alt="image1">
        <img src="../View/css/images/img2.png" alt="image2">
        <img src="../View/css/images/img3.png" alt="image3">
        <img src="../View/css/images/img4.png" alt="image4">
        <img src="../View/css/images/img5.png" alt="image5">
    </div>
    <script src="../controller/_js/slider.js"></script>
        <!-- ONDA 
            <svg class="onda4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                fill="#5BB318"
                fill-opacity="1"
                d="M0,160L60,144C120,128,240,96,360,106.7C480,117,600,171,720,213.3C840,256,960,288,1080,288C1200,288,1320,256,1380,240L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
            </svg>-->
            <a href="aula.php" type="button" class="botao2">AULAS</a>
    <!-- TEXTO E SEÇÃO SOBRE EVENTOS!-->
    <section></section>
    <!--<svg  class="onda5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
         fill="#FFFF"
         fill-opacity="1"
         d="M0,192L60,160C120,128,240,64,360,64C480,64,600,128,720,165.3C840,203,960,213,1080,202.7C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>-->
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
            <a href="../Model/login.php" type="button" class="botao3">TELA DE LOGIN</a>
            <!-- <img id="evento" src="app/View/css/images/evento.png"> -->
    </section>
    <section></section>
        <!--EFEITO CARROSSEL 
        <main class="main2">
            <section class="galery2">
                <div class="fotos2">
                    <img src="app/View/css/images/img1.png">
                    <img src="app/View/css/images/img2.png">
                    <img src="app/View/css/images/img4.png">
                    <img src="app/View/css/images/img1.png">
                </div>
            </section>
        </main>-->
 </body>