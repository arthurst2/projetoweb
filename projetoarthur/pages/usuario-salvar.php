<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome 	   = $_POST["nome_usuario"];
			$email 	   = $_POST["email_usuario"];
			$fone 	   = $_POST["fone_usuario"];
			$rgm 	   = $_POST["rgm_usuario"];
			$data_nasc = $_POST["data_nasc_usuario"];
			$genero    = $_POST["genero_usuario"];
			$end 	   = $_POST["end_usuario"];

			$sql = "INSERT INTO usuario (
						nome_usuario, 
						email_usuario, 
						fone_usuario, 
						rgm_usuario, 
						data_nasc_usuario, 
						genero_usuario, 
						end_usuario
					) VALUES (
						'{$nome}', 
						'{$email}', 
						'{$fone}', 
						'{$rgm}', 
						'{$data_nasc}', 
						'{$genero}', 
						'{$end}'
					)"; 

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}
			break;
		
		case 'editar':
			$nome 	   = $_POST["nome_usuario"];
			$email 	   = $_POST["email_usuario"];
			$fone 	   = $_POST["fone_usuario"];
			$rgm 	   = $_POST["rgm_usuario"];
			$data_nasc = $_POST["data_nasc_usuario"];
			$genero    = $_POST["genero_usuario"];
			$end 	   = $_POST["end_usuario"];

			$sql = "UPDATE usuario SET
						nome_usuario='{$nome}', 
						email_usuario='{$email}', 
						fone_usuario='{$fone}', 
						rgm_usuario='{$rgm}', 
						data_nasc_usuario='{$data_nasc}', 
						genero_usuario='{$genero}', 
						end_usuario='{$end}'
					WHERE
						id_usuario=".$_POST["id_usuario"]; 

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM usuario
					WHERE id_usuario=".$_REQUEST["id_usuario"]; 

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}
			break;
	}