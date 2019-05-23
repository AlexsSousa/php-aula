<?php
$objForn = new FornecedoresControl();
$itens = $objForn->getSuppliers();
?>
<table class="table table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Fornecedor</th>
            <th>Responsável</th>
            <th>Telefone</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($itens as $item) {?>
            <tr>
                <td><?=$item->getId()?></td>
                <td><?=$item->getNome()?></td>
                <td><?=$item->getResponsavel()?></td>
                <td><?=$item->getTelefone()?></td>
                <td>
                    <a href="?page=10&fornecedor=<?=$item->getId()?>" class="btn btn-success btn-sm">Visualizar</a>
                    <a href="?page=5&fornecedor=<?=$item->getId()?>" class="btn btn-primary btn-sm">Editar</a>
                    <a href="?page=11&fornecedor=<?=$item->getId()?>" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>