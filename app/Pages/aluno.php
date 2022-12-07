<?php 
session_start();

include("../Model/conexao.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>PROFESSOR</title>
    <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
    <link href='../View/css/tela-prof.css' rel='stylesheet'>
</head>
<body>
     <!--ÍNICIO DO MENU DE NAVEGAÇÃO-->
     <header>
        <nav>
            <a class="logo" href="index.php"><img src="../View/css/images/logo.png" style="width: 6%">GREEN PARKS</a>
            <ul class="nav-list">
                <li><a style="color: #ffe60b" href="index.php">INÍCIO</a></li>
                <li><a href="sobre.php">SOBRE</a></li> 
                <li><a href="aula.php">AULAS</a></li> 
                <li><a href="evento.php">EVENTOS</a></li> 
                <!--<a href="../Model/login.php"><img src="../View/css/images/icone_user.png" style="z-index: 0; width: 50%;">olá, faça login ou cadastre-se!</a>-->
            </ul>
        </nav>
    </header> 
    <!--FINAL DO MENU DE NAVEGAÇÃO-->
    <h1 class="my-5">Olá, <b></b> <br><br>

    <h1>lista </h1>
    <?php 
    $result = $conexaoMysqli->query("SELECT A.id_oficina, A.id_usuario, B.nome_oficina FROM aula A LEFT JOIN oficina B ON A.id_oficina = B.id_oficina"); 
    if ($result) {
            while ($rows = $result->fetch_object()) { 
              var_dump($rows);
              echo "id oficina $rows->id_usuario";
              }
            }
            else {
                echo "Error with SQL";
            }
  ?>
</body>
</html>