<?php
if (isset($_GET['fornecedor'])) {
    $rs = new FornecedoresControl();
    $rs->deleteSupplier();
}
?>