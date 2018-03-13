<?php include("cabecalho.php"); ?>
<?php if(isset($_GET["login"]) && $_GET["login"]==true){ ?>
    <p class="alert-sucess">Logado com sucesso!</a>
<?php }?>
<?php if(isset($_COOKIE["usuario_logado"])){?>
    <p class="text-sucess">Usuário Logado: <?=$_COOKIE["usuario_logado"]?></p>

<?php }?>
			<h1>Bem vindo!</h1>			

<?php include("rodape.php"); ?>