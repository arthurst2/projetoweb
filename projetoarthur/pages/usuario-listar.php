<h1>Listar Usuário</h1>
<?php
	$sql = "SELECT * FROM usuario";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-striped table-bordered table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>E-mail</th>";
		print "<th>Fone</th>";
		print "<th>RGM</th>";
		print "<th>Data de Nascimento</th>";
		print "<th>Gênero</th>";
		print "<th>Endereço</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_usuario."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->email_usuario."</td>";
			print "<td>".$row->fone_usuario."</td>";
			print "<td>".$row->rgm_usuario."</td>";
			print "<td>".ExibeData($row->data_nasc_usuario)."</td>";
			print "<td>".$row->genero_usuario."</td>";
			print "<td>".$row->end_usuario."</td>";
			print "<td>
					<button class='btn btn-primary' onclick=\"location.href='?page=usuario-editar&id_usuario=".$row->id_usuario."';\">Editar</button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=usuario-salvar&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultado</div>";
	}
?>