<?php 
    switch ($_REQUEST["acao"]) {
            case 'cadastrar':
               
                $nome_eventos = $_POST["nome_eventos"];
                $data_eventos = $_POST["data_eventos"];
                $horario_eventos = $_POST["horario_eventos"];
                $desc_eventos = $_POST["desc_eventos"];
                $cep_eventos = $_POST["cep_eventos"];
                $num_ende_eventos = $_POST["num_ende_eventos"];
                $id_usuario = "9";

                $sql = "INSERT INTO eventos (nome_eventos, data_eventos, horario_eventos, desc_eventos, cep_eventos, num_ende_eventos, id_usuario) VALUES ('{$nome_eventos}', '{$data_eventos}', '{$horario_eventos}', '{$desc_eventos}', '{$cep_eventos}',  '{$num_ende_eventos}', '{$id_usuario}')";

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
                $nome_eventos = $_POST["nome_eventos"];
                $data_eventos = $_POST["data_eventos"];
                $horario_eventos = $_POST["horario_eventos"];
                $desc_eventos = $_POST["desc_eventos"];
                $cep_eventos = $_POST["cep_eventos"];
                $num_ende_eventos = $_POST["num_ende_eventos"];
                $id_usuario = "9";
                 $sql = "UPDATE eventos SET 
                             nome_eventos='{$nome_eventos}',
                             data_eventos='{$data_eventos}',
                             horario_eventos='{$horario_eventos}',
                             desc_eventos='{$desc_eventos}',
                             cep_eventos='{$cep_eventos}',
                             num_ende_eventos='{$num_ende_eventos}',
                             id_usuario='{$id_usuario}'
                        WHERE 
                             id_eventos=".$_REQUEST["id_eventos"];
        
                 $res = $conexaoMysqli->query($sql);

                        if($res==true){
                            print "<script>alert('Editado com sucesso');</script>";
                            print "<script>location.href='?page=listar';</script>";
                        }else{
                            print "<script>alert('Não foi possivel editar');</script>"; 
                            print "<script>location.href='?page=listar';</script>";
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
            break;
    }
?>