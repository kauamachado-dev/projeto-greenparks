<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>ADMINISTRADOR</title>
    <link href='../View/css/admin.css' rel='stylesheet'>
    <script src='_js/postagem.js'></script>
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
    <div class="titulo">Área administrativa</div>
    <div class="linha"></div>
    <a href="aula.php">
        <input class="img1" type="image" src="../View/images/adm_aula.jpg">
    </a>
    <div class="texto1"> Aulas</div>
    <a href="evento.html">
        <input class="img2" type="image" src="../View/images/evento.png">
    </a>
    <div class="texto2"> Eventos</div>
    <a href="formaluno.php">
        <input class="img3" type="image" src="../View/images/aulas.png"> 
    </a>
    <div class="texto3"> Pedidos</div>
</body>
</html>