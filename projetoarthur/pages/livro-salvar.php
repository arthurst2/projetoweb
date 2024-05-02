<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$categoria_id_categoria = $_POST["categoria_id_categoria"];
			$titulo_livro = $_POST["titulo_livro"];
            $autor_livro = $_POST["autor_livro"];
            $editora_livro = $_POST["editora_livro"];
            $edicao_livro = $_POST["edicao_livro"];
            $localidade_livro = $_POST["localidade_livro"];
            $ano_livro = $_POST["ano_livro"];

            

			$sql = "INSERT INTO livro (categoria_id_categoria, titulo_livro, autor_livro, editora_livro, edicao_livro, localidade_livro, ano_livro)
					VALUES ('{$categoria_id_categoria}','{$titulo_livro}','{$autor_livro}','{$editora_livro}','{$edicao_livro}','{$localidade_livro}','{$ano_livro}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}

			break;
		
		case 'editar':
			$categoria_id_categoria = $_POST["categoria_id_categoria"];
			$titulo_livro = $_POST["titulo_livro"];
            $autor_livro = $_POST["autor_livro"];
            $editora_livro = $_POST["editora_livro"];
            $edicao_livro = $_POST["edicao_livro"];
            $localidade_livro = $_POST["localidade_livro"];
            $ano_livro = $_POST["ano_livro"];

			$sql = "UPDATE livro SET
						categoria_id_categoria='{$categoria_id_categoria}',
						titulo_livro='{$titulo_livro}'
                        autor_livro='{$autor_livro}'
                        editora_livro='{$editora_livro}'
                        edicao_livro='{$edicao_livro}'
                        localidade_livro='{$localidade_livro}'
                        ano_livro='{$ano_livro}'
					WHERE
					id_livro=".$_POST["id_livro"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}

			break;

		case 'excluir':
			$sql = "DELETE FROM livro 
					WHERE id_livro=".$_REQUEST["id_livro"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluído com sucesso!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}
			break;
	}