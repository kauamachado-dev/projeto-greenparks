<?php 
include("conexao.php"); /* Inclui a conexão com o banco de dados */

  /* Cria as variaveis e armazena os valores que foram inseridos no formulário de cadastro */
 $nome_usuario = $_POST["nome_usuario"];
 $sobrenome_usuario = $_POST["sobrenome_usuario"];
 $nasc_usuario = $_POST["nasc_usuario"];
 $email_usuario = $_POST["email_usuario"];
 $fone_usuario = $_POST["fone_usuario"];
 $cpf_usuario = $_POST["cpf_usuario"];
 $senha_usuario = $_POST["senha_usuario"];
 $id_tipo_usuario = "2";
 $id_responsavel = "";

  /* Pega os valores guardados nas variaveis e inseri no banco de dados*/
 $sql = "INSERT INTO usuario (nome_usuario, sobrenome_usuario, nasc_usuario, email_usuario, fone_usuario, cpf_usuario, senha_usuario, id_tipo_usuario, id_responsavel) VALUES ('{$nome_usuario}', '{$sobrenome_usuario}', '{$nasc_usuario}', '{$email_usuario}', '{$fone_usuario}', '{$cpf_usuario}', '{$senha_usuario}', '{$id_tipo_usuario}', '{$id_responsavel}')";
           
 $res = $conexaoMysqli->query($sql);

  /* Caso a variavel '$res' retorne verdadeiro, ou seja, cadastre um novo usuario na tabela de usuario, irá acionar o alert com a mensagem 'usuário cadastrada com sucesso' e redireciona o usuario para a página inicial */
 if($res==true){
 print "<script>alert('usuário cadastrada com sucesso');</script>";
 print "<script>location.href='../Pages/index.php';</script>";

  /* Caso a variavel '$res' retorne falso, ou seja, não cadastre um novo usuario na tabela de usuario, irá acionar o alert com a mensagem 'Não foi possivel cadastrar o usuário' e redireciona o usuario para a página de cadastro novamente */
 }else{
 print "<script>alert('Não foi possivel cadastrar o usuário');</script>"; 
 print "<script>location.href='forminst.php';</script>";
 }
?>
    