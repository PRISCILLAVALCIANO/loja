<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<?php if(isset($_GET["login"]) && $_GET["login"]==false){ ?>
    <p class="alert-danger">Usuário ou senha inválidos!</a>
<?php }?>
		<h1>pvloja</h1>
		<h2>Login</h2>
		<form action="login.php" method="post">
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
</body>
</html>