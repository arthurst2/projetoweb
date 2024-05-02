<h1>Listar livro</h1>
<?php
	$sql = "SELECT * FROM livro";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;
?>
<?php
$sql2 = "SELECT * FROM categoria";
$res2 = $conn->query($sql2) or die($conn->error);
?>
<?php
	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>categoria</th>";
        print "<th>titulo</th>";
        print "<th>autor</th>";
        print "<th>editora</th>";
        print "<th>edição</th>";
		print "<th>localidade</th>";
        print "<th>ano</th>";	
		print "<th>Ações</th>";	
		print "</tr>";
		while($row = $res->fetch_object()){
		while($row2 = $res2->fetch_object()){
			if($row->categoria_id_categoria == $row2->id_categoria) {
			print "<tr>";
			print "<td>".$row->id_livro."</td>";
			print "<td>".$row2->nome_categoria."</td>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->autor_livro."</td>";
            print "<td>".$row->editora_livro."</td>";	
            print "<td>".$row->edicao_livro ."</td>";	
            print "<td>".$row->localidade_livro."</td>";	
            print "<td>".$row->ano_livro."</td>";		
			print "<td>
						<button class='btn btn-primary' onclick=\"location.href='?page=livro-editar&id_livro=".$row->id_livro."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=livro-salvar&acao=excluir&id_livro=".$row->id_livro."';}else{false;}\">Excluir</button>
				   </td>";	
			print "</tr>";
			break;
		}else{
			print "<tr>";
			print "<td>".$row->id_livro."</td>";
			print "<td>".'sem categoria'."</td>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->autor_livro."</td>";
            print "<td>".$row->editora_livro."</td>";	
            print "<td>".$row->edicao_livro ."</td>";	
            print "<td>".$row->localidade_livro."</td>";	
            print "<td>".$row->ano_livro."</td>";		
			print "<td>
						<button class='btn btn-primary' onclick=\"location.href='?page=livro-editar&id_livro=".$row->id_livro."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=livro-salvar&acao=excluir&id_livro=".$row->id_livro."';}else{false;}\">Excluir</button>
				   </td>";	
			print "</tr>";
			break;
		}
	}}
		print "</table>";	
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultados.</div>";
	}

	
?>