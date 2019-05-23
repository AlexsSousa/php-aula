<?php
$produto = $_GET['produto'];
$objProd = new ProdutosControl();
if (!isset($produto)) {
    header("Location: ?page=2");
    exit;
}
$item = $objProd->getProduct($produto);
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th colspan="2"class="text-center"><h3>Produto - <strong><?=$item->getNome()?></strong></h3></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-md-4 bg-primary">ID</td>
            <td class="col-md-8"><?=$item->getId()?></td>
        </tr>
        <tr>
            <td class="col-md-4 bg-primary">Nome</td>
            <td class="col-md-8"><?=$item->getNome()?></td>
        </tr>
        <tr>
            <td class="col-md-4 bg-primary">Fornecedor</td>
            <td class="col-md-8"><?=$item->getForn()?></td>
        </tr>
        <tr>
            <td class="col-md-4 bg-primary">Categoria</td>
            <td class="col-md-8"><?=$item->getCat()?></td>
        </tr>
        <tr>
            <td class="col-md-4 bg-primary">Preço</td>
            <td class="col-md-8">R$ <?=number_format($item->getPreco(), 2)?></td>
        </tr>
        <tr>
            <td class="col-md-4 bg-primary">Quantidade</td>
            <td class="col-md-8"><?=$item->getQtd()?></td>
        </tr>
    </tbody>
</table>