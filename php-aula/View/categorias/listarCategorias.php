<?php
$objCat = new CategoriasControl();
$itens = $objCat->getCategories();

if (isset($_POST['buscaCategoria']) && $_POST['buscaCategoria'] != '') {
    $categoria = $_POST['buscaCategoria'];
    $itens = $objCat->searchCategory($categoria);

    if (sizeof($itens) == 0) {
        echo '<script>alert("Nenhum resultado encontrado!");</script>';
        $itens = $objCat->getCategories();
    }
} else {
    $itens = $objCat->getCategories();
}
?>
<div class="header">
    <div class="row">
        <form method="POST">
            <div class="col-md-10">
                <input type="search" name="buscaCategoria" class="form-control" placeholder="Buscar Produto...">
            </div>
            <div class="col-md-2">
                <input type="submit" value="Search" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
</div>
<section style="margin-yop:10px;">
    <div class="row">
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
                <?php foreach ($itens as $item) { ?>
                    <tr>
                        <td><?= $item->getId() ?></td>
                        <td><?= $item->getNome() ?></td>
                        <td><?= $item->getDescricao() ?></td>
                        <td>
                            <a href="?page=12&categoria=<?= $item->getId() ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?page=14&categoria=<?= $item->getId() ?>" class="btn btn-danger btn-sm">Remover</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>