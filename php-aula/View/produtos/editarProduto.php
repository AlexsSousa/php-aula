<?php
$produto = $_GET['produto'];

$objForn = new FornecedoresControl();
$objCat = new CategoriasControl();
$objProd = new ProdutosControl();

$itensForn = $objForn->getSuppliers();
$itensCat = $objCat->getCategories();
$itensProd = $objProd->getProduct($produto);

if (isset($_POST['nome'])) {
    $rs = new ProdutosControl();
    $rs->updateProduct();
}
?>
<div class="container">
<form action="" method="POST">
    <div class="form-group">
    <label for="nome">Nome do Produto:</label>
    <input type="text" name="nome" id="nome" class="form-control" value="<?=$itensProd->getNome()?>" required>
    </div>
    <div class="form-group">
    <label for="forn">Fornecedor:</label>
    <select name="forn" id="forn" class="form-control" required>
        <?php foreach ($itensForn as $forn) {
            if ($forn->getId() == $itensProd->getFornId()) {
            ?>
                <option value='<?=$forn->getId()?>' selected><?=$forn->getNome()?></option>
            <?php
                }else{
            ?>
                <option value='<?=$forn->getId()?>'><?=$forn->getNome()?></option>
            <?php }
        }?>
    </select>
    </div>
    <div class="form-group">
    <label for="cat">Categoria:</label>
    <select name="cat" id="cat" class="form-control" required>
        <?php foreach ($itensCat as $cat) {
            if ($cat->getId() == $itensProd->getCatId()) {
            ?>
                <option value='<?=$cat->getId()?>' selected><?=$cat->getNome()?></option>
            <?php
                }else{
            ?>
                <option value='<?=$cat->getId()?>'><?=$cat->getNome()?></option>
            <?php }
        }?>
    </select>
    </div>
    <div class="form-group">
    <label for="preco">Preço</label>
    <input type="text" class="form-control" name="preco" value="<?=$itensProd->getPreco()?>" id="preco" required>
    </div>
    <div class="form-group">
    <label for="qtd">Quantidade</label>
    <input type="number" min="0" class="form-control" name="qtd" id="qtd" value="<?=$itensProd->getQtd()?>" required>
    </div>
    <input type='submit' class="btn btn-primary btn-block" value="Salvar"  >
</form>
</div>