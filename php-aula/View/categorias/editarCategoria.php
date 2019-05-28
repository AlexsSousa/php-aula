<?php

if(!$_GET['categoria']){
    header("location: ?page=6");
}

$categoria = $_GET['categoria'];
$objForn = new CategoriasControl();

$itensForn = $objForn->getCategory($categoria);


if (isset($_POST['nome'])) {
    $rs = new CategoriasControl();
    $rs->updateCategory();    
}
?>
<div class="container">
<form action="" method="POST">
    <div class="form-group">
    <label for="nome">Categoria</label>
    <input type="text" name="nome" id="nome" class="form-control" value="<?=$itensForn->getNome()?>" required>
    </div>
    <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" name="descricao" id="descricao" value="<?=$itensForn->getDescricao()?>" required>
    </div>
    <input type='submit' class="btn btn-primary btn-block" value="Salvar">
</form>
</div>