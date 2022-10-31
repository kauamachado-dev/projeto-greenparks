<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../View/css/stilo.css" rel="stylesheet">
    <title>cadastro</title>
  </head>
  <body>
  <header>
        <nav>
            <a class="logo" href="../Pages/admin.php">GREEN PARKS</a>
            <ul class="nav-list">
                <li><a style="color: #ffe60b" href="../Pages/admin.php">Voltar</a></li>
                <li><a href="teste_aula.php">inicio</a></li> 
                <li><a href="?page=nova">Cadastrar Aulas</a></li> 
                <li><a href="?page=listar">Listar Aulas</a></li>        
            </ul>
        </nav>
    </header> 

<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php
    include("conexao.php");
 switch(@$_REQUEST["page"]){
  case "nova":
    include("nova_aula.php");
    break;
  case "listar":
    include("listar_aula.php");
    break;
  case "salvar";
    include("salvar_aula.php");
    break;
    case "editar";
    include("editar_aula.php");
    break;
    default:
    print  "<h1>Bem vindos!!</h1>";
  }
?>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>