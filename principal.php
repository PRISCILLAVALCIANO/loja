<?php 
include("cabecalho.php"); 
include("logica-usuario.php");

verificaUsuario();
?>
<?php if(isset($_GET["login"]) && $_GET["login"]==true){ ?>
    <p class="alert-success">Logado com sucesso!</a>
<?php }?>
<?php if(usuarioEstaLogado()){?>
    <p class="text-success">Usuário Logado: <?= usuarioLogado()?> 
    <a href="logout.php">Logout</a></p>
<?php }?>
			<h1>Bem vindo!</h1>			

<?php include("rodape.php"); ?>