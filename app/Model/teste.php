<?php

    session_start(); #inicia a sessão do PHP

    header("Content-type: text/html; charset=utf-8");
    $LoginErro = "Nenhum usuário com esses dados<br><a href=../Mode/login.php>Login</a>";
    if((isset($_POST['nome_usuario']) && isset($_POST['senha_usuario'])) || (isset($_SESSION['logado']))){ #Valida se o usuário está logando ou já está logado

	require('conexao.php'); #conexão com o Banco de Dados

	if(isset($_POST['nome_usuario']) && isset($_POST['senha_usuario'])){ #Caso o usuário esteja logando
		$queryUser1 =  mysqli_query($conexaoMysqli, "SELECT * FROM usuario WHERE nome_usuario = '$_POST[nome_usuario]' AND senha_usuario = '$_POST[senha_usuario]' LIMIT 1");
		if(mysqli_num_rows($queryUser1) != 0){
			if($queryUser = mysqli_fetch_assoc($queryUser1)){
				// Armazena dados em variáveis de sessão
	         $_SESSION["logado"] = true;
	        $_SESSION["id_usuario"] = $id;
	        $_SESSION["nome_usuario"] = $username;  #Salva em uma variável de Sessão a ID do usuário que está logado
				header('Location: ../Mode/login.php');
			}else{
				echo $LoginErro;
			}
		}else{
			echo $LoginErro;
		}
        //Se não estiver logado
        if (!isset($_SESSION['id_usuario']) || !isset($_SESSION['tipo_usuario'])) { 
            
            //Realoca para o login header("location: ../Model/login.php"); 
            #Caso o usuário já esteja logado
                $QueryLogado = mysqli_fetch_assoc(mysqli_query($conexaoMysqli, "SELECT * FROM usuario INNER JOIN tipo_usuario ON id_tipo_usuario = id_usuario;"));
                echo "Bem vindo <b>".$QueryLogado['nome_usuario']."</b>, tudo bem?<br>Não esqueça que você é <b>".$QueryLogado['descricao']."</b> nesse sistema!";
                echo '<br><a href=../config/Deslogar.php>Sair</a>';
	    }
	}
?>