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
<form action="login.php" method="post">
	<?php if(isset($_GET["logout"]) && $_GET["logout"]==true){ ?>
		<p class="alert-success">Deslogado com sucesso!</a>
	<?php }?>
	<?php if(isset($_GET["login"]) && $_GET["login"]==false){ ?>
		<p class="alert-danger">Usuário ou senha inválidos!</a>
	<?php }?>
	<?php if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"]==true){ ?>
		<p class="alert-danger">Você não está logado!</a>
	<?php }?>
			
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