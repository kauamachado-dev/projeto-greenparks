<?php 
    switch ($_REQUEST["acao"]) {
            case 'cadastrar':
                $nome_aula = $_POST["nome_aula"];
                $data_aula = $_POST["data_aula"];
                $horario_aula = $_POST["horario_aula"];
                $desc_aula = $_POST["desc_aula"];
                $id_endereco = $_POST["id_endereco"];
                $id_usuario = $_POST["id_usuario"];

                $sql = "INSERT INTO eventos (nome_aula, data_aula, horario_aula, desc_aula, id_endereco) VALUES ('{$nome_aula}', '{$data_aula}', '{$horario_aula}', '{$desc_aula}', '{$id_usuario}')";

                $res = $conexaoMysqli->query($sql);

                if($res==true){
                    print "<script>alert('Evento cadastrado com sucesso');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }
                else{
                    print "<script>alert('Não foi possivel cadastrar o evento');</script>"; 
                    print "<script>location.href='?page=listar';</script>";
                }
            break;
        }
?>