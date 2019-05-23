<?php
$objForn = new FornecedoresControl();
$itensForn = $objForn->getSuppliers();

if (isset($_POST['nome'])) {
    $objForn->setSupplier();
    
    var_dump($rs);
}
?>
<div class="container">
<form action="" method="POST">
    <div class="form-group">
    <label for="nome">Fornecedor</label>
    <input type="text" name="nome" id="nome" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="responsavel">Responsável</label>
    <input type="text" class="form-control" name="responsavel" id="responsavel" required>
    </div>
    <div class="form-group">
    <label for="cargoResponsavel">Cargo Responsável</label>
    <input type="text" class="form-control" name="cargoResponsavel" id="cargoResponsavel" required>
    </div>
    <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" name="endereco" id="endereco" required>
    </div>
    <div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" name="cidade" id="cidade" required>
    </div>
    <div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" name="estado" id="estado" required>
    </div>
    <div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" class="form-control" name="cep" id="cep" required>
    </div>
    <div class="form-group">
    <label for="pais">Pais</label>
    <input type="text" class="form-control" name="pais" id="pais" required>
    </div>
    <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" name="telefone" id="telefone" required>
    </div>
    <div class="form-group">
    <label for="site">Site</label>
    <input type="text" class="form-control" name="site" id="site" required>
    </div>
    <input type='submit' class="btn btn-primary btn-block" value="Salvar">
</form>
</div>