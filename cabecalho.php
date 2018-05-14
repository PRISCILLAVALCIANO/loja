<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php");
?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container">
			<div class="navbar-header">
				<a href="principal.php" class="navbar-brand">Minha Loja</a>
			</div>

				<div>
					<ul class="nav navbar-nav">
						<li><a href="produto-formulario.php">Produto</a></li>
						<li><a href="produto-lista.php">Lista de Produtos</a></li>
						<li><a href="venda-formulario.php">Vendas</a></li>
						<li><a href="vendas-lista.php">Lista de Vendas</a></li>
						<li><a href="entregas.php">Entregas</a></li>						
					</ul>
				</div>
				<li><a class="btn btn-warning" href="logout.php" role="button">Logout</a></li>
			</div>
		</div>
		
		<div class="container">

		<div class="principal">
		<?php 
			mostraAlerta("success");
			mostraAlerta("danger");	
		?>