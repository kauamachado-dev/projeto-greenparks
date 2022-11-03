<?php

session_start(); //Iniciar a sessao

//Limpar o buffer de saida
ob_start();

//Incluir a conexao com BD
include_once "conexao.php";

//Receber os dados do formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dados);

//Verificar se o usuario clicou no botao
if(!empty($dados['CadUsuario'])){
    $query_usuario = "INSERT INTO usuario (nome_usuario, email_usuario) VALUES (:u, :e)";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':u', $dados['nome_usuario'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':e', $dados['email_usuario'], PDO::PARAM_STR);
    $cad_usuario->execute();
    //var_dump($conn->lastInsertId());
    //Recuperar o ultimo id inserido
    $id_usuario = $conn->lastInsertId();

    $query_endereco= "INSERT INTO endereco (cep_endereco, bairro_endereco, rua_endereco, num_casa_endereco, id_usuario) VALUES (:cep, :bairro, :rua, :num_casa, :id_usuario)";
    $cad_endereco = $conn->prepare($query_endereco);
    $cad_endereco->bindParam(':cep', $dados['cep_endereco'], PDO::PARAM_STR);
    $cad_endereco->bindParam(':bairro', $dados['bairro_endereco'], PDO::PARAM_STR);
    $cad_endereco->bindParam(':rua', $dados['rua_endereco'] , PDO::PARAM_STR);
    $cad_endereco->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
    $cad_endereco->execute();

    //Criar a variavel global para salvar a mensagem de sucesso
    $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";

    //Redirecionar o usuario
    header("Location: index.php");
}else{
    //Criar a variavel global para salvar a mensagem de erro
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";

    //Redirecionar o usuario
    header("Location: index.php");
}