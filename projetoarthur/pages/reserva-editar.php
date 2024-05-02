<h1>Editar reserva</h1>
<?php
	$sql = "SELECT * FROM reserva WHERE livro_id_livro=".$_REQUEST["livro_id_livro"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();

?>
<form action="?page=reserva-salvar" method="POST">
<input type="hidden" name="acao" value="editar">
    <div class="mb-3">
		<label>id aluno</label>
		<input type="text" name="aluno_id_aluno" value="<?php print $row->aluno_id_aluno; ?>" class="form-control">
	</div>
    <div class="mb-3">
		<label>id livro</label>
		<input type="text" name="livro_id_livro" value="<?php print $row->livro_id_livro; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>id atendente</label>
		<input type="text" name="atendente_id_atendente" value="<?php print $row->atendente_id_atendente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>data emprestimo</label>
		<input type="text" name="data_emprestimo" value="<?php print $row->data_emprestimo; ?>"  class="form-control">
	</div>
    <div class="mb-3">
		<label>data devolucao</label>
		<input type="text" name="data_devolucao" value="<?php print $row->data_devolucao; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>