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
                <div id="menu" class="menu" data-aberto="false">
  <span id="menu-trigger" class="login">
    <i class="fa fa-plus"></i>
    <i class="fa fa-minus"></i>
  </span>
  <ul class="menu-menu">
    <li><a href='../Model/login.php'>Login</a></li>
    <li><a href='../Pages/instrutor.php'>Professor</a></li>
    <li><a href='../Pages/aluno.php'>Aluno</a></li>
    <li><a href='../Controller/sair.php'>Sair</a></li>
  </ul>
</div>
        </nav>
    </header> 
    <!--FINAL DO MENU DE NAVEGAÇÃO-->
    <h1 class="my-5">Olá, <b></b> <br><br>

   <h1>lista </h1>
   <?php
   $sql = "SELECT * FROM aula";

   $res = $conexaoMysqli->query($sql);

   $qtd = $res->num_rows;
   if($qtd > 0){
       print "<table class='table table-hover table-striped table-bordered'>";
           print "<tr>";
           print "<th>#</th>";
           print "<th>Nome da oficina</th>";
           print "<th>data da oficina</th>";
           print "<th>horario da oficina</th>";
           print "<th>Descrição da oficina</th>";
           print "<th>Ações</th>";
           print "</tr>";
       print "<table class='table table-hover table-striped table-bordered'>";
       while($row = $res->fetch_object()){
           print "<tr>";
           print "<td>".$row->id_oficina."</td>";
           print "<td>".$row->nome_oficina."</td>";
           print "<td>".$row->data_oficina."</td>";
           print "<td>".$row->horario_oficina."</td>";
           print "<td>".$row->desc_oficina."</td>";
           print "<td>
               <button onclick=\"location.href='?page=editar_oficina&id=".$row->id_oficina."';\" class='btn btn-success'>Editar</button>
               <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar_oficina&acao=excluir_oficina&id=".$row->id_oficina."';}else{false;}\" class='btn btn-danger'>Excluir</button>
               </td>";
           print "</tr>";
       }
       print "</table>";
   }else{
       print"<p class='alert alert-danger'>Não encontrou resultados!</p>";
   }
   
  ?>
</body>
</html>