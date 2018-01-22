<?php 
include("cabecalho.php"); 
include("conecta.php");
include("banco-produto.php");

$produtos =listaProdutos($conexao);
?>


<table class="table table-striped table-bordered">
	<h3>Listagem de Produtos</h3>

	<?php
	
	foreach ($produtos as $produto) {
	
	?>
		<tr>
			<td><?= $produto['id']?></td>
			<td><?= $produto['nome'] ?></td>
			<td><?= $produto['preco'] ?></td>
		</tr>

	<?php	
	}
	?>

</table>

<?php include ("rodape.php"); ?>