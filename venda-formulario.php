<?php require_once("cabecalho.php");?>
<table class="table">
                <h1>Formulário de Venda</h1>
                <tr>
                    <td>Cliente</td>
                    <td><input type="text" name="cliente" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control"></td>
                </tr>
                <tr>
                    <td>Produto</td>
                    <td><input type="text" name="produto" class="form-control"></td>
                </tr>
                <tr>
                    <td>Quantidade</td>
                    <td><input type="number" name="quantidade"></td>
                </tr>
                <tr>
                    <td>Preço</td>
                    <td><input type="text" name="preco"></td>
                </tr>
                <tr>
                    <td>Desconto</td>
                    <td><input type="text" name="desconto"></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" name="total" ></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type="submit">Incluir</button></td>
                </tr>
            </table>
        </form>
<?php require_once("rodape.php");?>