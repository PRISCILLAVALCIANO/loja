<?php 
include("cabecalho.php"); 
include("logica-usuario.php");

verificaUsuario();
?>
<?php if(isset($_SESSION["success"])) { ?>
    <p class="alert-success"><?= $_SESSION["success"]?></p>
<?php 
    unset($_SESSION["success"]);
}?>
<?php if(usuarioEstaLogado()){?>
    <p class="text-success">Usuário Logado: <?= usuarioLogado()?> 
    <a class="btn btn-warning" href="logout.php" role="button">Logout</a>
<?php }?>
			<h1>Bem vindo!</h1>			

<?php include("rodape.php"); ?>