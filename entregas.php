<?php require_once("cabecalho.php");?>
    <h1>Entregas</h1>
			<form action="envia-pedido.php" method="post">
            <table class="table">
                <tr>
                    <td>Pedido</td>
                    <td><input type="text" name="pedido"></td>
                </tr>
                <tr>
                    <td>Cliente</td>
                    <td><input type="text" name="cliente" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control"></td>
                </tr>
                <tr>
                    <td>Descrição</td>
                    <td><textarea class="form-control" name="descricao"></textarea></td>
                <tr>
                    <td><button class="btn btn-primary" type="submit">Enviar</button></td>
                </tr>
            </table>
            </form>
<?php require_once("rodape.php");?>