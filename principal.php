<?php 
include("cabecalho.php"); 
include("logica-usuario.php");
?>
<?php if(isset($_GET["login"]) && $_GET["login"]==true){ ?>
    <p class="alert-sucess">Logado com sucesso!</a>
<?php }?>
<?php if(usuarioEstaLogado()){?>
    <p class="text-sucess">Usuário Logado: <?= usuarioLogado()?> 
    <a href="logout.php">Logout</a></p>
<?php }?>
			<h1>Bem vindo!</h1>			

<?php include("rodape.php"); ?>