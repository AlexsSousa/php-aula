<?php
$objProd = new ProdutosControl();
$itens = $objProd->getProducts();
?>
<table class="table table-dark table-hover table-striped">
    <thead class="thead">
        <tr>
            <th>ID</th>
            <th>Produtos</th>
            <th>Fornecedor</th>
            <th>Categorias</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($itens as $item) {?>
            <tr>
                <td><?=$item->getId()?></td>
                <td><?=$item->getNome()?></td>
                <td><?=$item->getForn()?></td>
                <td><?=$item->getCat()?></td>
                <td>R$ <?=number_format($item->getPreco(), 2)?></td>
                <td><?=$item->getQtd()?></td>
                <td>
                    <a href="?page=7&produto=<?=$item->getId()?>" class="btn btn-success btn-sm">Visualizar</a>
                    <a href="?page=8&produto=<?=$item->getId()?>" class="btn btn-primary btn-sm">Editar</a>
                    <a href="?page=9&produto=<?=$item->getId()?>" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>