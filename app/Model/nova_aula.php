<h1>Adicionar aula</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome da Aula:</label>
        <input type="text" name="nome_aula" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data da Aula:</label>
        <input type="date" name="data_aula" class="form-control">
    </div>
    <div class="mb-3">
        <label>Horario da Aula:</label>
        <input type="time" name="horario_aula" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição da Aula:</label>
        <input type="text" name="desc_aula" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço:</label>
        <input type="text" name="id_endereco" class="form-control">
    </div>
    <div class="mb-3">
        <label>Usuario:</label>
        <input type="text" name="id_usuario" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>