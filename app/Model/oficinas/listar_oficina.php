<h1>Listar Oficinas</h1>
<?php
 $sql = "SELECT * FROM oficina";

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