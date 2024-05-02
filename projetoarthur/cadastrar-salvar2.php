<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>listar cadastrar</title>
  </head>
  <body>
<?php 
      $pesquisa = $_POST['buscar'] ?? ''; 
      include ("config.php");
      $sql = "SELECT * FROM categoria";
      $dados = mysqli_query($conn, $sql);
    ?>
    <?php  
        $sql2 = "SELECT * FROM livro";
        $dados2 = mysqli_query($conn, $sql2);                  
    ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Pesquisar</h1>
          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="cadastrar-salvar2.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Nome da categoria" aria-label="Search" name="buscar" autofocus>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
          </nav>

          <table table class='table table-striped table-hover table-bordered'>
            <thead>
              <tr>
                <th scope="col">categoria:</th>
                <th scope="col">livros:</th>
            </thead>
            <tbody>
            <?php 
              while($linha = $dados->fetch_object()){
                while($linha2 = $dados2->fetch_object()){
                    if ($linha->id_categoria == $linha2->categoria_id_categoria) { 
                      if ($pesquisa == $linha->nome_categoria) { 
                        echo "<tr>
                              <th scope='row'>$pesquisa</th>
                              <th scope='row'>$linha2->titulo_livro</th>
                              <td>                    
                              </td>
                              </tr>";
                      }else {echo "<tr>
                                    <th scope='row'>$linha->nome_categoria</th>
                                    <th scope='row'>$linha2->titulo_livro</th>
                                    <td>                    
                                    </td>
                                    </tr>";
?>            <?php 
                              print "<td>
					                            <button class='btn btn-primary' onclick=\"location.href='/projeto/?page=categoria-editar&id_categoria=".$linha->id_categoria."';\">Editar</button>

					                    	      <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=categoria-salvar&acao=excluir&id_categoria=".$linha->id_categoria."';}else{false;}\">Excluir</button>
				                            </td>";	
		                	       print "</tr>";
		           }
            }
          }
        } 
            ?>

            </tbody>
          </table>
        </div>        
      </div>
    </div>
            
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>