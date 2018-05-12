<?php
include("logica-usuario.php");
include("mostra-alerta.php");
?>
<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/loja.css" rel="stylesheet" />
</head>
<body>
<h1>pvloja</h1>
<div class="container">
<div class="principal">

<?php 
mostraAlerta("success");
mostraAlerta("danger");
?>


<form action="login.php" method="post">	
			<h2>Login</h2>
				<table class="table">
					<tr>
						<td>Email</td>
						<td><input class="form-control" type="email" name="email"</td>
					</tr>
					<tr>
						<td>Senha</td>
						<td><input class="form-control" type="password" name="senha"></td>
					</tr>
					<tr>
						<td><button class="btn btn-primary">Login</button></td>
					</tr>
				</table>
		</form>
	</div>
	</div>
</body>
</html>