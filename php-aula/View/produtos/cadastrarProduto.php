<?php
$objForn = new FornecedoresControl();
$objCat = new CategoriasControl();
$itensForn = $objForn->getSuppliers();
$itensCat = $objCat->getCategories();

if (isset($_POST['nome'])) {
    $rs = new ProdutosControl();
    $rs->setProduct();
    
    var_dump($rs);
}
?>
<div class="container">
<form action="" method="POST">
    <div class="form-group">
    <label for="nome">Nome do Produto:</label>
    <input type="text" name="nome" id="nome" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="forn">Fornecedor:</label>
    <select name="forn" id="forn" class="form-control" required>
        <?php foreach ($itensForn as $forn) {?>
            <option value='<?=$forn->getId()?>'><?=$forn->getNome()?></option>
        <?php }?>
    </select>
    </div>
    <div class="form-group">
    <label for="cat">Categoria:</label>
    <select name="cat" id="cat" class="form-control" required>
        <?php foreach ($itensCat as $cat) {?>
            <option value='<?=$cat->getId()?>'><?=$cat->getNome()?></option>
        <?php }?>
    </select>
    </div>
    <div class="form-group">
    <label for="preco">Preço</label>
    <input type="text" class="form-control" name="preco" id="preco" required>
    </div>
    <div class="form-group">
    <label for="qtd">Quantidade</label>
    <input type="number" class="form-control" name="qtd" min="0" id="qtd" required>
    </div>
    <input type='submit' class="btn btn-primary btn-block" value="Salvar">
</form>
</div>