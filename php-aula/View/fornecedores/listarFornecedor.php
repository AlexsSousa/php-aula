<?php
$fornecedor = $_GET['fornecedor'];
$objForn = new FornecedoresControl();
if (!isset($fornecedor)) {
    header("Location: ?page=4");
    exit;
}
$item = $objForn->getSupplier($fornecedor);
?>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th colspan="2"class="text-center"><h3>Fornecedor - <strong><?=$item->getNome()?></strong></h3></th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td class="col-md-2 bg-primary">ID</td>
                <td class="col-md-10"><?=$item->getId()?></td>
            </tr>
            <tr>
                <td class="col-md-2 bg-primary">Nome</td>
                <td class="col-md-10"><?=$item->getNome()?></td>
            </tr>
            <tr>
                <td class="col-md-2 bg-primary">Responsável</td>
                <td class="col-md-10"><?=$item->getResponsavel()?></td>
            </tr>
            <tr>
                <td class="col-md-2 bg-primary">Cargo do Responsável</td>
                <td class="col-md-10"><?=$item->getCargoResponsavel()?></td>
            </tr>
            <tr>
                <td class="col-md-2 bg-primary">Endereço</td>
                <td class="col-md-10"><?=$item->getEndereco()?></td>
            </tr>
            <tr>
                <td class="col-md-2 bg-primary">Cidade</td>
                <td class="col-md-10"><?=$item->getCidade()?></td>
            </tr>
            <tr>
                <td class="col-md-2 bg-primary">Estado</td>
                <td class="col-md-10"><?=$item->getEstado()?></td>
            </tr>
            <tr>
                <td class="col-md-2 bg-primary">CEP</td>
                <td class="col-md-10"><?=$item->getCep()?></td>
            </tr>
            <tr>
                <td class="col-md-2 bg-primary">País</td>
                <td class="col-md-10"><?=$item->getPais()?></td>
            </tr>
            <tr>
                <td class="col-md-2 bg-primary">Site</td>
                <td class="col-md-10"><?=$item->getSite()?></td>
            </tr>
            <tr>
                <td class="col-md-2 bg-primary">Telefone</td>
                <td class="col-md-10"><?=$item->getTelefone()?></td>
            </tr>
            <tr>
    </tbody>
</table>