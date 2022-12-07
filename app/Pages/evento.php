<?php
session_start();

include("../Model/conexao.php");

 $sql = "SELECT * FROM eventos";

 $res = mysqli_query($conexaoMysqli,$sql);

 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>EVENTOS</title>
    <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
    <link href="../View/css/event.css" rel="stylesheet">
    <link href="../View/css/animation.css" rel="stylesheet">
    <script type="text/javascript" src="../Controller/_js/modal.js"></script>
    <script type="text/javascript" src="app/Controller/_js/modal.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
      <!--ÍNICIO DO MENU DE NAVEGAÇÃO -->
      <header>
        <nav>
            <a class="logo" href="index.php"><img src="../View/css/images/logo.png" style="width: 6%">GREEN PARKS</a>
            <ul class="nav-list">
                <li><a href="index.php">INÍCIO</a></li>
                <li><a href="sobre.php">SOBRE</a></li> 
                <li><a href="aula.php">AULAS</a></li> 
                <li><a style="color: #ffe60b" href="evento.php">EVENTOS</a></li> 
                <!--<a href="../Model/login.php"><img src="../View/css/images/icone_user.png" style="z-index: 0; width: 50%;">olá, faça login ou cadastre-se!</a>-->
            </ul>
        </nav>
    </header>  
    <!--FINAL DO MENU DE NAVEGAÇÃO-->
    <svg  class="ondain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#5bb318" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,80C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
</svg>
    <!---INÍCIO - CARROSSEL-->
    <main class="main">
        <section class="galery">
            <div class="fotos">
                <img src="../View/css/images/festival.png">
                <img src="../View/css/images/musical.png">
                <img src="../View/css/images/natal.png">
                <img src="../View/css/images/teatro.png">
            </div>
        </section>
    </main>
    <!---FINAL - CARROSSEL-->
    <div class="titulo1">PRÓXIMOS EVENTOS</div>
    <div class="linha1"></div>
    <!---INÍCIO - MODAL-->
    <?php while($sql = mysqli_fetch_assoc($res)){ ?>
    <div class="flex-container">
        <div class="row row-cols-3">
            <div class="col">
        
              <p onclick="abrirModal()"><?php echo $sql{'nome_eventos'}; ?></p>
              <button class="abrir" data-bs-toggle="modal" data-bs-target="#exampleModal">Saiba mais</button>

              <div class="fundo_modal" id="modal" onclick="fecharModal()">
                  <div class="modal">
                      <span class="fechar" onclick="fecharModal()">&times;</span>
                      <div class="texto"><p><?php echo $sql{'desc_eventos'}; ?></p></div>
                  </div>
              </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!---FINAL - MODAL-->
    <!---INÍCIO - GALERIA DE FOTOS-->
    <div class="titulo3">GALERIA DE FOTOS</div>
    <div class="linha3"></div>

    <div class="container">
        <h1 class="heading">Pesquisar imagem</h1>
        <input type="text" placeholder="escreva aqui..." id="search-box">

        <div class="container-image">
            <div class="image" data-title="agua">
                <img src="" alt="">
                <h3></h3>
            </div>

            <div class="image" data-title="cores">
                <img src="" alt="">
                <h3></h3>
            </div>

            <div class="image" data-title="zebra">
                <img src="" alt="">
                <h3></h3>
            </div>

            <div class="image" data-title="cores">
                <img src="" alt="">
                <h3></h3>
            </div>

            <div class="image" data-title="cinza">
                <img src="" alt="">
                <h3></h3>
            </div>
        </div>
    </div>
<script src="../Controller/_js/galeria.js"></script>
</body>
</html>