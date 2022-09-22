<?php

    include("_php/conexao.php");

        $nome=$_POST[ 'nome'];
        $nome=$_POST[ 'datanascaluno'];
        $nome=$_POST[ 'nomeresponsavel'];
        $nome=$_POST[ 'telefonealuno'];
        $nome=$_POST[ 'cpfaluno'];
        $nome=$_POST[ 'cpfresponsavel'];
        $nome=$_POST[ 'emailaluno'];
        $nome=$_POST[ 'senhaaluno'];
        $nome=$_POST[ 'cepaluno'];
        $nome=$_POST[ 'enderecoaluno'];
        $nome=$_POST[ 'bairro'];
        $nome=$_POST[ 'numeroaluno'];
/* Se nao der certo tenta deixar igual os id's de baixo e os de cima*/
        $sql = "INSERT INTO endereco(id_endereco, 'cep_endereco', 'bairro_endereco', 'rua_endereco', num_casa_endereco, id_usuario)"

    if (mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso";

    }    
    else{
        echo("Algo deu errado!".mysqli_connect_error($conexao));
    }
    mysqli_close($conexao)
?>