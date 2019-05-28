<?php
$objForn = new FornecedoresControl();
$itens = $objForn->getSuppliers();

if (isset($_POST['buscaFornecedor']) && $_POST['buscaFornecedor'] != '') {
    $fornecedor = $_POST['buscaFornecedor'];
    $itens = $objForn->searchSupplier($fornecedor);

    if (sizeof($itens) == 0) {
        echo '<script>alert("Nenhum resultado encontrado!");</script>';
        $itens = $objForn->getSuppliers();
    }
} else {
    $itens = $objForn->getSuppliers();
}

?>

<div class="header">
    <div class="row">
        <form method="POST">
            <div class="col-md-10">
                <input type="search" name="buscaFornecedor" class="form-control" placeholder="Buscar Produto...">
            </div>
            <div class="col-md-2">
                <input type="submit" value="Search" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
</div>
<section style="margin-yop:10px;">
    <div class="row">
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
                <?php foreach ($itens as $item) { ?>
                    <tr>
                        <td><?= $item->getId() ?></td>
                        <td><?= $item->getNome() ?></td>
                        <td><?= $item->getResponsavel() ?></td>
                        <td><?= $item->getTelefone() ?></td>
                        <td>
                            <a href="?page=10&fornecedor=<?= $item->getId() ?>" class="btn btn-success btn-sm">Visualizar</a>
                            <a href="?page=5&fornecedor=<?= $item->getId() ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?page=11&fornecedor=<?= $item->getId() ?>" class="btn btn-danger btn-sm">Remover</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>