<h1>listar eventos</h1>
<?php
 $sql = "SELECT * FROM eventos";

 $res = $conexaoMysqli->query($sql);

 $qtd = $res->num_rows;
 if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome do evento</th>";
        print "<th>data do evento</th>";
        print "<th>horario do evento</th>";
        print "<th>Descrição do evento</th>";
        print "<th>Ações</th>";
        print "</tr>";
    print "<table class='table table-hover table-striped table-bordered'>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_eventos."</td>";
        print "<td>".$row->nome_eventos."</td>";
        print "<td>".$row->data_eventos."</td>";
        print "<td>".$row->horario_eventos."</td>";
        print "<td>".$row->desc_eventos."</td>";
        print "<td>
            <button onclick=\"location.href='?page=editar&id=".$row->id_eventos."';\" class='btn btn-success'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id_eventos."';}else{false;}\" class='btn btn-danger'>Excluir</button>
              </td>";
        print "</tr>";
    }
    print "</table>";
 }else{
    print"<p class='alert alert-danger'>Não encontrou resultados!</p>";
 }
?>