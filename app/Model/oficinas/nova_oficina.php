<h1>Adicionar oficina</h1>

<form action="?page=salvar_oficina" method="POST">
    <input type="hidden" name="acao" value="cadastrar_oficina">
    <div class="mb-3">
        <label>Nome da oficina:</label>
        <input type="text" name="nome_oficina" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data da oficina:</label>
        <input type="date" name="data_oficina" class="form-control">
    </div>
    <div class="mb-3">
        <label>Horario da oficina:</label>
        <input type="time" name="horario_oficina" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição da oficina:</label>
        <input type="text" name="desc_oficina" class="form-control">
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