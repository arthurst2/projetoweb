<h1>Editar livro</h1>
<?php
	$sql = "SELECT * FROM livro WHERE id_livro=".$_REQUEST["id_livro"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();

?>
<form action="?page=livro-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_livro" value="<?php print $row->id_livro; ?>">
	<div class="mb-3">
		<label>categoria id categoria</label>
		<input type="text" name="categoria_id_categoria" value="<?php print $row->categoria_id_categoria; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>titulo livro</label>
		<input type="text" name="titulo_livro" value="<?php print $row->titulo_livro; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>autor livro</label>
		<input type="text" name="autor_livro" value="<?php print $row->autor_livro; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>editora livro</label>
		<input type="text" name="editora_livro" value="<?php print $row->editora_livro; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>edicao livro</label>
		<input type="text" name="edicao_livro" value="<?php print $row->edicao_livro; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>localidade livro</label>
		<input type="text" name="localidade_livro" value="<?php print $row->localidade_livro; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>ano livro</label>
		<input type="text" name="ano_livro" value="<?php print $row->ano_livro; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>