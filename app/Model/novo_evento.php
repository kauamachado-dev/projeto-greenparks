<h1>Adicionar evento</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Evento:</label>
        <input type="text" name="nome_eventos" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data do Evento:</label>
        <input type="date" name="data_eventos" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição do Evento:</label>
        <input type="text" name="desc_eventos" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>