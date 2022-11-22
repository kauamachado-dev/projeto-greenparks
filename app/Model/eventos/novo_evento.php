<h1>Adicionar eventos</h1>
<br><br>
<?php
  include_once ('viacep.php');
  $address = getAddress();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <h2>Dados sobre o evento</h2>
    <div class="mb-3">
        <label>Nome do Evento:</label>
        <input type="text" name="nome_eventos" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data do Evento:</label>
        <input type="date" name="data_eventos" class="form-control">
    </div>
    <div class="mb-3">
        <label>Horario do Evento:</label>
        <input type="time" name="horario_eventos" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição do Evento:</label>
        <input type="text" name="desc_eventos" class="form-control">
    </div>
    <br><br>
    <h2>Local do evento</h2>
    <div class="mb-3">
        <label>CEP:</label>
        <input type="text" name="cep_eventos" class="form-control">
    </div>
    <div class="mb-3">
        <label>Número da casa/local:</label>
        <input type="text" name="num_ende_eventos" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>