<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$id_aluno = $_POST["aluno_id_aluno"];
			$id_livro  = $_POST["id_livro"];
            $atendente_id_atendente = $_POST["atendente_id_atendente"];
            $data_emprestimo = $_POST["data_emprestimo"];
            $data_delovucao = $_REQUEST["data_devolucao"];
            

			$sql = "INSERT INTO reserva (aluno_id_aluno, livro_id_livro, atendente_id_atendente, data_emprestimo,data_devolucao)
					VALUES ('{$id_aluno}','{$id_livro}','{$atendente_id_atendente}','{$data_emprestimo}','{$data_devolucao}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}

			break;
		
		case 'editar':
			$livro_id_livro = $_POST["livro_id_livro"];
            $aluno_id_aluno = $_POST["aluno_id_aluno"];
			$atendente_id_atendente = $_POST["atendente_id_atendente"];
            $data_emprestimo = $_POST["data_emprestimo"];
            $data_devolucao = $_POST["data_devolucao"];

			$sql = "UPDATE livro SET
						aluno_id_aluno='{$aluno_id_aluno}',
						livro_id_livro='{$livro_id_livro}'
                        atendente_id_atendente='{$atendente_id_atendente}'
                        data_emprestimo='{$data_emprestimo}'
                        data_devolucao='{$data_devolucao}'
					WHERE
					livro_id_livro=".$_POST["livro_id_livro"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}

			break;

		case 'excluir':
			$sql = "DELETE FROM reserva 
					WHERE livro_id_livro=".$_REQUEST["livro_id_livro"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluído com sucesso!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}
			break;
	}