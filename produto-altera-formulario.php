<?php 
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");

verificaUsuario();

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
 ?>
			
			<h1>Alterando Produto</h1>
			<form action="altera-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
				<table class="table">
					<?php 
						include("produto-formulario-base.php");
					?>

				 	<tr>
					
						<td><input class="btn btn-primary" type="submit" value="Alterar"/></td> 
						<td><a class="btn btn-light" href="produto-lista.php" role="button">Voltar</a></td>	
					
					 </tr>
				 	
				 </table>
						
			</form>

<?php include("rodape.php"); ?>