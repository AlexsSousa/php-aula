<?php
if (isset($_GET['produto'])) {
    $rs = new ProdutosControl();
    $rs->deleteProduct();
}
?>