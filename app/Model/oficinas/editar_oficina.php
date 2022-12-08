<h1>editar oficina</h1>
<?php
    $sql = "SELECT * FROM oficina WHERE id_oficina=".$_REQUEST["id"]; 
    $res = $conexaoMysqli->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar_oficina" method="POST">
    <input type="hidden" name="acao" value="editar_oficina">
    <input type="hidden" name="id_oficina" value="<?php print $row->id_oficina; ?>">
    <h2>Dados sobre a oficina</h2><br>
    <div class="mb-3">
        <label>Nome da oficina:</label>
        <input type="text" name="nome_oficina" value="<?php print $row->nome_oficina; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data da oficina:</label>
        <input type="date" name="data_oficina" value="<?php print $row->data_oficina; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Horario da oficina:</label>
        <input type="time" name="horario_oficina" value="<?php print $row->horario_oficina; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição da oficina:</label>
        <input type="text" name="desc_oficina" value="<?php print $row->desc_oficina; ?>" class="form-control">
    </div>
    <h2>Local da oficina</h2><br>
    <div class="mb-3">
        <label>CEP:</label>
        <input type="text" name="cep_oficina" value="<?php print $row->cep_oficina; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Número do endereço:</label>
        <input type="text" name="num_ende_oficina" value="<?php print $row->num_ende_oficina; ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>