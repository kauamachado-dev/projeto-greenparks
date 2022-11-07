<h1>editar evento</h1>
<?php
    $sql = "SELECT eventos.nome_eventos, eventos.data_eventos, eventos.horario_eventos, eventos.desc_eventos, endereco.cep_endereco, endereco.bairro_endereco, endereco.rua_endereco, endereco.num_casa_endereco FROM eventos JOIN endereco ON eventos.id_endereco = endereco.id_endereco WHERE id_eventos =".$_REQUEST["id"];

 
    $res = $conexaoMysqli->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_eventos" value="<?php print $row->id_eventos; ?>">
    <input type="hidden" name="id_endereco" value="<?php print $row->id_endereco; ?>"><br><br>
    <h2>Dados sobre o evento</h2><br>
    <div class="mb-3">
        <label>Nome do Evento:</label>
        <input type="text" name="nome_eventos" value="<?php print $row->nome_eventos ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data do Evento:</label>
        <input type="date" name="data_eventos" value="<?php print $row->data_eventos ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Horario do Evento:</label>
        <input type="time" name="horario_eventos" value="<?php print $row->horario_eventos ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição do Evento:</label>
        <input type="text" name="desc_eventos" value="<?php print $row->desc_eventos ?>" class="form-control">
    </div><br><br>
    <h2>Local do evento</h2><br>
    <div class="mb-3">
        <label>CEP:</label>
        <input type="text" name="cep_endereco" value="<?php print $row->cep_endereco ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Bairro:</label>
        <input type="text" name="bairro_endereco" value="<?php print $row->bairro_endereco ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Rua:</label>
        <input type="text" name="rua_endereco" value="<?php print $row->rua_endereco ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Número da casa/local:</label>
        <input type="number" name="num_casa_endereco" value="<?php print $row->num_casa_endereco ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</form>