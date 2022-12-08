<?php 
    session_start();

    include("../Model/conexao.php");

    //se não estiver definida, não possuir um id_usuario ou um status_usuario
    /*if (!isset($_SESSION['id_usuario']) || !isset($_SESSION['id_tipo_usuario'])){
        //vai mandar ele devolta para a página de login
        header("location: ../Model/login.php"); 
    exit;
        //Se o usuario for funcionario
    } else if ($_SESSION['id_tipo_usuario'] != 3) {
        //Realoca o usuario para o funcionario
        header("location: ../Pages/instrutor.php");
    //Se o usuario estiver inativo
    } else if ($_SESSION['id_tipo_usuario'] != 3) {
        //Realoca para a pagina do login
        header("location: ../Pages/aluno.php");
    exit;
    }*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>ALUNO</title>
    <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='../View/css/cad_aluno.css' rel='stylesheet'>
</head>
<body>
     <!--ÍNICIO DO MENU DE NAVEGAÇÃO-->
     <header>
        <nav>
            <a class="logo" href="index.php"><img src="../View/css/images/logoprincipal.png" style="width: 18%;"></a>
            <ul class="nav-list">
                <li><a style="color: #ffe60b" href="index.php">INÍCIO</a></li>
                <li><a href="sobre.php">SOBRE</a></li> 
                <li><a href="aula.php">AULAS</a></li> 
                <li><a href="evento.php">EVENTOS</a></li> 
        </nav>
    </header> 
     <!-- ONDA -->
     <svg  class="ondain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5bb318" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,80C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
    <!--FINAL DO MENU DE NAVEGAÇÃO-->
    <h1 class="ola">Olá, <b></b> <br><br>

   <?php

$sql = "SELECT u.* , r.*
FROM usuario u
LEFT JOIN responsavel r ON u.id_responsavel = r.id_responsavel WHERE id_usuario='2'"; 

$res = $conexaoMysqli->query($sql);

$qtd = $res->num_rows;
if($qtd > 0){
   print "<table class='table table-hover table-striped table-bordered'>";
       print "<tr>";
       print "<th>Ações</th>";
       print "</tr>";
   print "<table class='table table-hover table-striped table-bordered'>";
   while($row = $res->fetch_object()){
       print "<tr>";
       print "<td>
           <button onclick=\"location.href= '../Model/aluno/editar_formaluno.php';\" class='btn btn-success' value=".$row->id_usuario.">Editar</button>
           <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href= deletar_aluno&id=".$row->id_usuario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
             </td>";
       print "</tr>";
   }
   print "</table>";
}else{
   print"<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>
   <h1 style="font-family:'Passion One'; margin-top:6%; font-size:50px; color:#09400A; margin-left: 10%">Lista de aulas </h1>
  <?php 
  
  $sql = "SELECT A.*, O.*, U.nome_usuario FROM aula A INNER JOIN usuario U ON U.id_usuario = A.id_usuario INNER JOIN oficina O ON O.id_usuario = U.id_usuario WHERE U.id_usuario = '3'";

  $res = $conexaoMysqli->query($sql);
 
  $qtd = $res->num_rows;
  if($qtd > 0){
   while($row = $res->fetch_object()){
   print "<table class='table table-hover'>";
   print "<thead>";
   print "<tr>";
   print " <th scope='col'>".$row->nome_oficina."</th>";
   print "</tr>";
   print "</thead>";
   
   print "<tbody>";
   print "<tr>";
   print "<td>".$row->nome_usuario."</td>";
   print "</tr>";
   print "</tbody>";
   print" </table>";
   }
  }
  ?>
</body>
</html>