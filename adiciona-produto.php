<?php 
include("cabecalho.php"); 
include("conecta.php");
include("banco-produto.php");

 	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
			

		if(insereProduto($conexao, $nome, $preco, $descricao)) { ?>

			<p class="text-success">Produto <?= $nome; ?>, R$ <?= $preco; ?> adicionado com sucesso!</p>
		<?php
		} else {
			$msg = mysqli_error($conexao);
		?>
			<p class="text-danger">O produto <?= $nome; ?> não foi adicionado: <?= $msg?></p>
		<?php
		}

?>

<?php include("rodape.php"); ?>