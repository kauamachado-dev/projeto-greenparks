<?php 
    switch ($_REQUEST["acao"]) {
            case 'cadastrar':
               
                $cep_endereco = $_POST["cep_endereco"]; 
                $bairro_endereco = $_POST["bairro_endereco"];
                $rua_endereco = $_POST["rua_endereco"];
                $num_casa_endereco = $_POST["num_casa_endereco"];
                $id_usuario = "3";

                $sql = "INSERT INTO  endereco (cep_endereco, bairro_endereco, rua_endereco, num_casa_endereco, id_usuario) VALUES ('{$cep_endereco}', '{$bairro_endereco}', '{$rua_endereco}', '{$num_casa_endereco}', '{$id_usuario}')";
                $conexaoMysqli->query($sql);
                $id_usuario = $conexaoMysqli->insert_id;

                $nome_eventos = $_POST["nome_eventos"];
                $data_eventos = $_POST["data_eventos"];
                $horario_eventos = $_POST["horario_eventos"];
                $desc_eventos = $_POST["desc_eventos"];

                $sql = "INSERT INTO eventos (nome_eventos, data_eventos, horario_eventos, desc_eventos, id_endereco) VALUES ('{$nome_eventos}', '{$data_eventos}', '{$horario_eventos}', '{$desc_eventos}', '{$id_usuario}')";

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

            case 'editar':
                $cep_endereco = $_POST["cep_endereco"]; 
                $bairro_endereco = $_POST["bairro_endereco"];
                $rua_endereco = $_POST["rua_endereco"];
                $num_casa_endereco = $_POST["num_casa_endereco"];
                $id_usuario = "3";
                $sql = "UPDATE endereco SET 
                            cep_endereco='{$cep_endereco}',
                            bairro_endereco='{$bairro_endereco}',
                            rua_endereco='{$rua_endereco}',
                            num_casa_endereco='{$num_casa_endereco}',
                            id_usuario='{$id_usuario}',
                        WHERE 
                            id_endereco=".$_REQUEST["id_endereco"];
                        $res = $conexaoMysqli->query($sql);

                        $nome_eventos = $_POST["nome_eventos"];
                        $data_eventos = $_POST["data_eventos"];
                        $horario_eventos = $_POST["horario_eventos"];
                        $desc_eventos = $_POST["desc_eventos"];
                 $sql = "UPDATE eventos SET 
                             nome_eventos='{$nome_eventos}',
                             data_eventos='{$data_eventos}',
                             horario_eventos='{$horario_eventos}',
                             desc_eventos='{$desc_eventos}',
                             id_endereco='{$id_endereco}',
                        WHERE 
                             id_eventos=".$_REQUEST["id_eventos"];
        
                 $res = $conexaoMysqli->query($sql);

                        if($res==true){
                            print "<script>alert('Editado com sucesso');</script>";
                           // print "<script>location.href='?page=listar';</script>";
                        }else{
                            print "<script>alert('Não foi possivel editar');</script>"; 
                          //  print "<script>location.href='?page=listar';</script>";
                        }
                break;

            case 'excluir':

            $sql = "DELETE FROM eventos WHERE id_eventos=".$_REQUEST["id"];

            $res = $conexaoMysqli->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir');</script>"; 
                print "<script>location.href='?page=listar';</script>";
            }

            $sql = "DELETE FROM endereco WHERE id_endereco=".$_REQUEST["id"];

            $res = $conexaoMysqli->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir');</script>"; 
                print "<script>location.href='?page=listar';</script>";
            }
            break;
    }
?>