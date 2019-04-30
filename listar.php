<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Portal Notícia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Painel Control Notícia</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>


    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Controle
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Cadastro</a>
        <a class="dropdown-item" href="#">Alterar</a>
        <a class="dropdown-item" href="#">Ativar</a>
        <a class="dropdown-item" href="#">Inativar</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Sair</a>
    </li>
  </ul>
</nav> 
<div class="container">
	<div class="row">
	<?php
		include ("Noticia.php");
		$listarNoticia = new Noticia();
		$valor = $listarNoticia->buscarTodos();
	?>	
		<div class="col-sm-12">
			<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
  <?php
		foreach($valor as $linha){
	?>
    <tr>
      <th scope="row"><?php echo $linha["id"]; ?></th>
      <td><?php echo $linha["titulo"]; ?></td>
      <td><?php echo $linha["autor"]; ?></td>
      <td><a href=controllerAlterar.php<?=$linha["id"]?>><button type="button" class="btn btn-warning">Alterar</button></a>
			<a href=controllerAtivarInativar.php?id=<?=$linha["id"]?>&situacao=1>
			<button type="button" class="btn btn-success">Ativar</button></a>
			<a href=controllerAtivarInativar.php?id=<?=$linha["id"]?>&situacao=0><button type="button" class="btn btn-danger">Inativar</button></a></td>
    </tr>
  <?php
  }
  ?>  
  </tbody>
</table>
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->

</body>
</html> 