<?php
    //Página principal dos funcionários, assim que sair do login, serão redirecionados pra cá... 

    //Inclui a conexão 
    include '../Model/conexao.php';

    //inicia a sessão 
    session_start(); 

    //se não estiver definida, não possuir um id_usuario ou um status_usuario
    /*if (!isset($_SESSION['id_usuario']) || !isset($_SESSION['id_tipo_usuario'])){
        //vai mandar ele devolta para a página de login
        header("location: ../Model/login.php"); 
    exit;
        //Se o usuario for funcionario
    } else if ($_SESSION['id_tipo_usuario'] != 2) {
        //Realoca o usuario para o funcionario
        header("location: ../Pages/instrutor.php");
    //Se o usuario estiver inativo
    } else if ($_SESSION['id_tipo_usuario'] != 2) {
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
            <a class="logo" href="index.php"><img src="../View/css/images/logoprincipal.png" style="width: 15%"></a>
            <ul class="nav-list">
                <li><a style="color: #ffe60b" href="index.php">INÍCIO</a></li>
                <li><a href="sobre.php">SOBRE</a></li> 
                <li><a href="aula.php">AULAS</a></li> 
                <li><a href="evento.php">EVENTOS</a></li> 
                <!--<a href="../Model/login.php"><img src="../View/css/images/icone_user.png" style="z-index: 0; width: 50%;">olá, faça login ou cadastre-se!</a>-->
            </ul>
        </nav>
    </header> 
       <!-- ONDA -->
       <svg  class="ondain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5bb318" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,80C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
    <!--FINAL DO MENU DE NAVEGAÇÃO-->
    <h1 class="ola">Olá professor, <b><?php echo htmlspecialchars($_SESSION["nome_usuario"]); ?></b>
    <h1>Lista </h1>
    <?php
   

    $sql = "SELECT A.*, O.*, U.nome_usuario FROM aula A INNER JOIN usuario U ON U.id_usuario = A.id_usuario INNER JOIN oficina O ON O.id_usuario = U.id_usuario WHERE A.id_usuario = '1'";

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