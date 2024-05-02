<h1>Cadastrar Reserva</h1>
<form action="?page=reserva-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>LIVRO</label>
		<select name="id_livro" class="form-control">
			<option>-Escolha o livro-</option>
		<?php
			$sql = "SELECT * FROM livro";

			$res = $conn->query($sql) or die($conn->error);

			if($res->num_rows){
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_livro."'>";
					print $row->titulo_livro."</option>";
				}
			}else{
				print "Não há livros cadastradas";
			}
		?>
		</select>
	</div>
	<div class="mb-3">
		<label>Id do aluno</label>
		<input type="text" name="aluno_id_aluno" class="form-control">
	</div>
    <div class="mb-3">
		<label>Id do atendente</label>
		<input type="text" name="atendente_id_atendente" class="form-control">
	</div>
    <div class="mb-3">
		<label>Data do emprestimo</label>
		<input type="date" name="data_emprestimo" class="form-control">
	</div>
    <div class="mb-3">
		<label>Data de devolução</label>
		<input type="date" name="data_devolucao" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>