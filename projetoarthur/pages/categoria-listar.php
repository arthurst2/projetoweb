<?php 
      $pesquisa = $_POST['buscar'] ?? ''; 
      include ("config.php");
      $sql = "SELECT * FROM  categoria WHERE nome_categoria LIKE '%$pesquisa%'";
      $dados = mysqli_query($conn, $sql);
    ?>


    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Pesquisar</h1>
          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="categoria-listar.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="buscar" autofocus>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
          </nav>

          <table table class='table table-striped table-hover table-bordered'>
            <thead>
              <tr>
                <th scope="col">categoria</th>
                <th scope="col">livros</th>
            </thead>
            <tbody>

            <?php 
              while ($linha = mysqli_fetch_assoc($dados) ) {
                  $nomeproduto = $linha['nome_categoria'];
        
            echo "<tr>
                    <th scope='row'>$nomeproduto</th>
                    <td>

                    </td>
                </tr>";
            }
            ?>
