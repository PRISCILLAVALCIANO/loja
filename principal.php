<?php 
require_once("cabecalho.php"); 
require_once("logica-usuario.php");

verificaUsuario();
?>
<?php if(isset($_SESSION["success"])) { ?>
    <p class="alert-success"><?= $_SESSION["success"]?></p>
<?php 
    unset($_SESSION["success"]);
}?>
<?php if(usuarioEstaLogado()){?>
    <p class="text-success">Usuário Logado: <?= usuarioLogado()?> 
<?php }?>
			<h1>Bem vindo!</h1>			

<?php include("rodape.php"); ?>