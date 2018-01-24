<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");

$categorias = listaCategorias($conexao);

 ?>
			
			<h1>Formulário de Cadastro de Produto</h1>
			<form action="adiciona-produto.php" method="post">
				<table class="table">
					<tr>
						
						<td>Nome</td>
						<td><input class="form-control" type="text" name="nome"/><br/></td>	
					
					</tr>

					<tr>

						<td>Preço</td>
						<td><input type="number" name="preco"/><br/></td>
					
					</tr>
					 				 
				 	<tr>
				 		<td>Descrição</td>
				 		<td><textarea name="descricao" class="form-control"></textarea></td>
				 	</tr>

				 	<tr>
				 		<td>Categoria</td>
				 		<td>
				 			<?php foreach ($categorias as $categoria) : ?>
				 				<input type="radio" name="categoria_id" value="<?=$categoria['id']?>"><?=$categoria['nome']?></br>
				 			<?php endforeach ?>
				 		</td>
				 	</tr>

				 	<tr>
					
						<td><input class="btn btn-primary" type="submit" value="Cadastrar"/></td> 	
					
					 </tr>
				 	
				 </table>
						
			</form>

<?php include("rodape.php"); ?>