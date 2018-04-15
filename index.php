<?php
include("logica-usuario.php");
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
<?php if(isset($_SESSION["success"])) { ?>
		<p class="alert-success"><?= $_SESSION["success"]?></p>
	<?php 
		unset($_SESSION["success"]);
	}?>
	<?php if(isset($_SESSION["danger"])) { ?>
		<p class="alert-danger"><?= $_SESSION["danger"]?></p>
	<?php 
		unset($_SESSION["danger"]);
	}?>
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