<?php
if (isset($_GET['categoria'])) {
    $rs = new CategoriasControl();
    $rs->deleteCategory($_GET['categoria']);
}
?>