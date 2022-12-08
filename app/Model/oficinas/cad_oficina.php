<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../View/css/images/logo.png" type="image/x-icon">
    <link href='../../View/css/cad_aula.css' rel='stylesheet'>
    <script src='_js/postagem.js'></script>
    <title>NOVA OFICINA</title>
  </head>
  <body>
  <header>
        <nav>
        <a class="logo" href="index.php"><img src="../../View/css/images/logoprincipal.png" style="width: 15%"></a>
            <ul class="nav-list">
                <li><a href="../../Pages/admin.php">Voltar</a></li>
                <li><a href="?page=nova_oficina">Cadastrar oficina</a></li> 
                <li><a href="?page=listar_oficina">Listar oficina</a></li>        
            </ul>
        </nav>
    </header> 
    <svg  class="ondain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5bb318" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,80C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php
    include("../conexao.php");
 switch(@$_REQUEST["page"]){
  case "nova_oficina":
    include("nova_oficina.php");
    break;
  case "listar_oficina":
    include("listar_oficina.php");
    break;
  case "salvar_oficina";
    include("salvar_oficina.php");
    break;
    case "editar_oficina";
    include("editar_oficina.php");
    break;
    default:
    print  "<h1>Bem vindos!!</h1>";
  }
?>
    </div>
  </div>
</div>
  </body>
</html>