<h1>Listar Reserva</h1>
<?php
	$sql = "SELECT * FROM reserva";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;
?>

<?php
$sql2 = "SELECT * FROM livro";
$res2 = $conn->query($sql2) or die($conn->error);
$qtd2 = $res2->num_rows;
?>

<?php

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>id aluno</th>";
        print "<th>id livro</th>";
		print "<th>nome livro</th>";
        print "<th>id atendente</th>";
		print "<th>data de emprestimo</th>";	
		print "<th>data devolução</th>";	
		print "</tr>";
		while($row = $res->fetch_object()){
            while($row2 = $res2->fetch_object()){          
                if($row->livro_id_livro == $row2->id_livro) {                 
			print "<tr>";
			print "<td>".$row->aluno_id_aluno."</td>";
			print "<td>".$row->livro_id_livro."</td>";
            print "<td>".$row2->titulo_livro."</td>";
			print "<td>".$row->atendente_id_atendente."</td>";	
            print "<td>".$row->data_emprestimo."</td>";
            print "<td>".$row->data_devolucao."</td>";
			print "<td>
						<button class='btn btn-primary' onclick=\"location.href='?page=reserva-editar&livro_id_livro=".$row->livro_id_livro."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=reserva-salvar&acao=excluir&livro_id_livro=".$row->livro_id_livro."';}else{false;}\">Excluir</button>
				   </td>";	
			print "</tr>";
            break;
		}else{
            print "<tr>";
			print "<td>".$row->aluno_id_aluno."</td>";
			print "<td>".$row->livro_id_livro."</td>";
            print "<td>".'livro sem nome'."</td>";
			print "<td>".$row->atendente_id_atendente."</td>";	
            print "<td>".$row->data_emprestimo."</td>";
            print "<td>".$row->data_devolucao."</td>";
			print "<td>
						<button class='btn btn-primary' onclick=\"location.href='?page=reserva-editar&livro_id_livro=".$row->livro_id_livro."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=reserva-salvar&acao=excluir&livro_id_livro=".$row->livro_id_livro."';}else{false;}\">Excluir</button>
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