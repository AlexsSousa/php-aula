<?php
$objCat = new CategoriasControl();
$itens = $objCat->getCategories();
?>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($itens as $item) {?>
            <tr>
                <td><?=$item->getId()?></td>
                <td><?=$item->getNome()?></td>
                <td><?=$item->getDescricao()?></td>
                <td>
                    <a href="" class="btn btn-primary btn-sm">Editar</a>
                    <a href="" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>