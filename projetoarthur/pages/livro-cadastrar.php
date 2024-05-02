<h1>Cadastrar Livro</h1>
<form action="?page=livro-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Número da categoria</label>
		<input type="text" name="categoria_id_categoria" class="form-control">
	</div>
    <div class="mb-3">
		<label>titulo do livro</label>
		<input type="text" name="titulo_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>autor do livro</label>
		<input type="text" name="autor_livro" class="form-control">
	</div>
    <div class="mb-3">
		<label>editora do livro </label>
		<input type="text" name="editora_livro" class="form-control">
	</div>
    <div class="mb-3">
		<label>edicao do livro</label>
		<input type="text" name="edicao_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>localidade do livro</label>
		<input type="text" name="localidade_livro" class="form-control">
	</div>
    <div class="mb-3">
		<label>ano_livro</label>
		<input type="date" name="ano_livro" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>