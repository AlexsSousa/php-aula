<?php

if(!$_GET['fornecedor']){
    header("location: ?page=4");
}

$fornecedor = $_GET['fornecedor'];
$objForn = new FornecedoresControl();

$itensForn = $objForn->getSupplier($fornecedor);


if (isset($_POST['nome'])) {
    $rs = new FornecedoresControl();
    $rs->updateSupplier();    
}
?>
<div class="container">
<form action="" method="POST">
    <div class="form-group">
    <label for="nome">Fornecedor</label>
    <input type="text" name="nome" id="nome" class="form-control" value="<?=$itensForn->getNome()?>" required>
    </div>
    <div class="form-group">
    <label for="responsavel">Responsável</label>
    <input type="text" class="form-control" name="responsavel" id="responsavel" value="<?=$itensForn->getResponsavel()?>" required>
    </div>
    <div class="form-group">
    <label for="cargoResponsavel">Cargo Responsável</label>
    <input type="text" class="form-control" name="cargoResponsavel" id="cargoResponsavel" value="<?=$itensForn->getcargoResponsavel()?>" required>
    </div>
    <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" name="endereco" id="endereco" value="<?=$itensForn->getEndereco()?>" required>
    </div>
    <div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" name="cidade" id="cidade" value="<?=$itensForn->getCidade()?>" required>
    </div>
    <div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" name="estado" id="estado" value="<?=$itensForn->getEstado()?>" required>
    </div>
    <div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" class="form-control" name="cep" id="cep" value="<?=$itensForn->getCEP()?>" required>
    </div>
    <div class="form-group">
    <label for="pais">País</label>
    <input type="text" class="form-control" name="pais" id="pais" value="<?=$itensForn->getPais()?>" required>
    </div>
    <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" name="telefone" id="telefone" value="<?=$itensForn->getTelefone()?>" required>
    </div>
    <div class="form-group">
    <label for="site">Site</label>
    <input type="text" class="form-control" name="site" id="site" value="<?=$itensForn->getSite()?>">
    </div>
    <input type='submit' class="btn btn-primary btn-block" value="Salvar">
</form>
</div>