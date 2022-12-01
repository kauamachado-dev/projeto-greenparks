<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
    <link href='../../View/css/stilo.css' rel='stylesheet'>
    <script src='_js/postagem.js'></script>
    <title>cadastro</title>
  </head>
  <body>
  <header>
        <nav>
            <a class="logo" href="../Pages/admin.php">GREEN PARKS</a>
            <ul class="nav-list">
                <li><a style="color: #ffe60b" href="../../Pages/admin.php">Voltar</a></li>
                <li><a href="?page=nova_oficina">Cadastrar oficina</a></li> 
                <li><a href="?page=listar_oficina">Listar oficina</a></li>        
            </ul>
        </nav>
    </header> 

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