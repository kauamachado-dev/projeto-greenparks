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
</head>
<body>
      <!--ÍNICIO DO MENU DE NAVEGAÇÃO -->
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
    <svg  class="ondain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#5bb318" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,80C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
</svg>
    <!---INÍCIO - CARROSSEL-->
    <main class="main">
        <section class="galery">
            <div class="fotos">
                <img src="../View/css/images/img1.png">
                <img src="../View/css/images/img2.png">
                <img src="../View/css/images/img4.png">
                <img src="../View/css/images/img1.png">
            </div>
        </section>
    </main>
    <!---FINAL - CARROSSEL-->
    <div class="titulo1">PRÓXIMOS EVENTOS</div>
    <div class="linha1"></div>
    <!---INÍCIO - MODAL-->
    <div class="flex-container">
        <div>
              <img class="img1" onclick="abrirModal()" src="https://rodoviariaonline.com.br/wp-content/uploads/2019/04/saiba-o-que-fazer-em-londrina-3.jpg">
              <p onclick="abrirModal()">Para saber o horário e endereço deste evento click em saiba mais</p>
              <button class="abrir" onclick="abrirModal()">Saiba mais</button>
              
              <div class="fundo_modal" id="modal" onclick="fecharModal()">
                  <div class="modal">
                      <span class="fechar" onclick="fecharModal()">&times;</span>
                      <div class="texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel maximus arcu, non tempus ex. Ut finibus, arcu a maximus porttitor, urna quam volutpat ante, id finibus quam ante auctor dui. Sed euismod bibendum accumsan. Etiam pretium sem sem, vitae tincidunt velit mollis vitae. Fusce varius, diam id bibendum volutpat, erat libero ultrices ligula, et elementum urna est sed ligula. In a sapien accumsan, porta quam quis, feugiat ex.</p></div>
                      <img class="img" src="https://rodoviariaonline.com.br/wp-content/uploads/2019/04/saiba-o-que-fazer-em-londrina-3.jpg">
                  </div>
              </div>
        </div>
        <div>
          <img class="img1" onclick="abrirModal2()" src="https://rodoviariaonline.com.br/wp-content/uploads/2019/04/saiba-o-que-fazer-em-londrina-2.jpg">
              <p onclick="abrirModal2()">Para saber o horário e endereço deste evento click em saiba mais</p>
              <button class="abrir" onclick="abrirModal2()">Saiba mais</button>
  
              <div class="fundo_modal" id="modal2" onclick="fecharModal2()">
                  <div class="modal">
                      <span class="fechar" onclick="fecharModal2()">&times;</span>
                      <div class="texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel maximus arcu, non tempus ex. Ut finibus, arcu a maximus porttitor, urna quam volutpat ante, id finibus quam ante auctor dui. Sed euismod bibendum accumsan. Etiam pretium sem sem, vitae tincidunt velit mollis vitae. Fusce varius, diam id bibendum volutpat, erat libero ultrices ligula, et elementum urna est sed ligula. In a sapien accumsan, porta quam quis, feugiat ex.</p></div>
                      <img class="img" src="https://rodoviariaonline.com.br/wp-content/uploads/2019/04/saiba-o-que-fazer-em-londrina-2.jpg">
                  </div>
              </div>
        </div>
        <div>
          <img class="img1" onclick="abrirModal3()" src="https://www.socialismocriativo.com.br/wp-content/uploads/2022/03/Design-sem-nome2-1-683x512.jpg">
              <p onclick="abrirModal3()">Para saber o horário e endereço deste evento click em saiba mais</p>
              <button class="abrir" onclick="abrirModal3()">Saiba mais</button>

              <div class="fundo_modal" id="modal3" onclick="fecharModal3()">
                  <div class="modal">
                      <span class="fechar" onclick="fecharModal3()">&times;</span>
                      <div class="texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel maximus arcu, non tempus ex. Ut finibus, arcu a maximus porttitor, urna quam volutpat ante, id finibus quam ante auctor dui. Sed euismod bibendum accumsan. Etiam pretium sem sem, vitae tincidunt velit mollis vitae. Fusce varius, diam id bibendum volutpat, erat libero ultrices ligula, et elementum urna est sed ligula. In a sapien accumsan, porta quam quis, feugiat ex.</p></div>
                      <img class="img" src="https://www.socialismocriativo.com.br/wp-content/uploads/2022/03/Design-sem-nome2-1-683x512.jpg">
                  </div>
              </div>
        </div>  
        <div>
            <img class="img1" onclick="abrirModal()" src="https://rodoviariaonline.com.br/wp-content/uploads/2019/04/saiba-o-que-fazer-em-londrina-3.jpg">
            <p onclick="abrirModal()">Para saber o horário e endereço deste evento click em saiba mais</p>
            <button class="abrir" onclick="abrirModal()">Saiba mais</button>
            
            <div class="fundo_modal" id="modal" onclick="fecharModal()">
                <div class="modal">
                    <span class="fechar" onclick="fecharModal()">&times;</span>
                    <div class="texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel maximus arcu, non tempus ex. Ut finibus, arcu a maximus porttitor, urna quam volutpat ante, id finibus quam ante auctor dui. Sed euismod bibendum accumsan. Etiam pretium sem sem, vitae tincidunt velit mollis vitae. Fusce varius, diam id bibendum volutpat, erat libero ultrices ligula, et elementum urna est sed ligula. In a sapien accumsan, porta quam quis, feugiat ex.</p></div>
                    <img class="img" src="https://rodoviariaonline.com.br/wp-content/uploads/2019/04/saiba-o-que-fazer-em-londrina-3.jpg">
                </div>
            </div>
      </div>
      <div>
        <img class="img1" onclick="abrirModal2()" src="https://rodoviariaonline.com.br/wp-content/uploads/2019/04/saiba-o-que-fazer-em-londrina-2.jpg">
            <p onclick="abrirModal2()">Para saber o horário e endereço deste evento click em saiba mais</p>
            <button class="abrir" onclick="abrirModal2()">Saiba mais</button>

            <div class="fundo_modal" id="modal2" onclick="fecharModal2()">
                <div class="modal">
                    <span class="fechar" onclick="fecharModal2()">&times;</span>
                    <div class="texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel maximus arcu, non tempus ex. Ut finibus, arcu a maximus porttitor, urna quam volutpat ante, id finibus quam ante auctor dui. Sed euismod bibendum accumsan. Etiam pretium sem sem, vitae tincidunt velit mollis vitae. Fusce varius, diam id bibendum volutpat, erat libero ultrices ligula, et elementum urna est sed ligula. In a sapien accumsan, porta quam quis, feugiat ex.</p></div>
                    <img class="img" src="https://rodoviariaonline.com.br/wp-content/uploads/2019/04/saiba-o-que-fazer-em-londrina-2.jpg">
                </div>
            </div>
      </div>
      <div>
        <img class="img1" onclick="abrirModal3()" src="https://www.socialismocriativo.com.br/wp-content/uploads/2022/03/Design-sem-nome2-1-683x512.jpg">
            <p onclick="abrirModal3()">Para saber o horário e endereço deste evento click em saiba mais</p>
            <button class="abrir" onclick="abrirModal3()">Saiba mais</button>

            <div class="fundo_modal" id="modal3" onclick="fecharModal3()">
                <div class="modal">
                    <span class="fechar" onclick="fecharModal3()">&times;</span>
                    <div class="texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel maximus arcu, non tempus ex. Ut finibus, arcu a maximus porttitor, urna quam volutpat ante, id finibus quam ante auctor dui. Sed euismod bibendum accumsan. Etiam pretium sem sem, vitae tincidunt velit mollis vitae. Fusce varius, diam id bibendum volutpat, erat libero ultrices ligula, et elementum urna est sed ligula. In a sapien accumsan, porta quam quis, feugiat ex.</p></div>
                    <img class="img" src="https://www.socialismocriativo.com.br/wp-content/uploads/2022/03/Design-sem-nome2-1-683x512.jpg">
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