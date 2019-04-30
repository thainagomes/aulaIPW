<?php
	include("cabecalho.php");
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			&nbsp;
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h2>Cadastro de Notícia</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<form action="controllerNoticia.php" method="post">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
					    <label for="titulo">Título:</label>
					    <input type="text" class="form-control" id="titulo" name="titulo">
			  		</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="autor">Autor:</label>
			 		   <input type="text" class="form-control" id="autor" name="autor">
				  </div>
				</div>
			</div>
				
				
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">Curso:</label>
				    <input type="text" class="form-control" id="curso" name="curso">
				  </div>
				</div>
				<div class="col-sm-6">
  				  <div class="form-group">
  				  <h2>Situação</h2>
					<div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Ativo</label>
					</div>
					<div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Inativo</label>
					</div>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
			  		<div class="form-group"	>
			   		 <label for="descricao">Descrição:</label>
			    			<textarea class="form-control" id="descricao" name="descricao">
			    </textarea>
			  		</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="dataPublicacao">Data Publicação:</label>
			 		   <input type="date" class="form-control" id="dataPublicacao" name="dataPublicacao">
				  </div>
				</div>
			</div>
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form> 	
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->

<?php
	include("rodape.php");
?>