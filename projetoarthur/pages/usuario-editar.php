<h1>Editar Usuário</h1>
<?php
	$sql = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();
?>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_usuario" value="<?php print $row->nome_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="email" name="email_usuario" value="<?php print $row->email_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Fone</label>
		<input type="text" name="fone_usuario" value="<?php print $row->fone_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>RGM</label>
		<input type="number" name="rgm_usuario" value="<?php print $row->rgm_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="data_nasc_usuario" value="<?php print $row->data_nasc_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Gênero</label><br>
		<label><input type="radio" name="genero_usuario" value="Masculino" 
			<?php print ($row->genero_usuario=="Masculino" ? "checked" : ""); ?> > 
		Masculino</label>
		<label><input type="radio" name="genero_usuario" value="Feminino"<?php print ($row->genero_usuario=="Feminino" ? "checked" : ""); ?> > 
		Feminino</label>
		<label><input type="radio" name="genero_usuario" value="Outros"<?php print ($row->genero_usuario=="Outros" ? "checked" : ""); ?> > 
		Outros</label>
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="end_usuario" value="<?php print $row->end_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>