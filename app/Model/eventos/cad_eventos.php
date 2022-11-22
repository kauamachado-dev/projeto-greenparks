<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../View/css/stilo.css" rel="stylesheet">
    <title>cadastro</title>
  </head>
  <body>
  <header>
        <nav>
            <a class="logo" href="../Pages/admin.php">GREEN PARKS</a>
            <ul class="nav-list">
                <li><a style="color: #ffe60b" href="../../Pages/admin.php">Voltar</a></li>
                <li><a href="?page=novo">Cadastrar Eventos</a></li> 
                <li><a href="?page=listar">Listar Eventos</a></li>        
            </ul>
        </nav>
    </header> 

<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php
    include("../conexao.php");
 switch(@$_REQUEST["page"]){
  case "novo":
    include("novo_evento.php");
    break;
  case "listar":
    include("listar_eventos.php");
    break;
  case "salvar";
    include("salvar_eventos.php");
    break;
  case "editar";
    include("editar_eventos.php");
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