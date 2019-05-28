<?php
$objCat = new CategoriasControl();
$itensCat = $objCat->getCategories();

if (isset($_POST['nome'])) {
    $rs = new CategoriasControl();
    $rs->setCategory();
    
    var_dump($rs);
}
?>
<div class="container">
<form action="" method="POST">
    <div class="form-group">
    <label for="nome">Categoria:</label>
    <input type="text" class="form-control" name="nome" id="nome" required>
    </div>
    <div class="form-group">
    <label for="descricao">Descrição:</label>
    <input type="text" class="form-control" name="descricao" id="descricao" required>
    </div>
    <input type='submit' class="btn btn-primary btn-block" value="Salvar">
</form>
</div>