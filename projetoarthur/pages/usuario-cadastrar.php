<h1>Cadastrar Usuário</h1>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="email" name="email_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Fone</label>
		<input type="text" name="fone_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>RGM</label>
		<input type="number" name="rgm_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="data_nasc_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Gênero</label><br>
		<label><input type="radio" name="genero_usuario" value="Masculino"> 
		Masculino</label>
		<label><input type="radio" name="genero_usuario" value="Feminino"> 
		Feminino</label>
		<label><input type="radio" name="genero_usuario" value="Outros"> 
		Outros</label>
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="end_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>