<?php

require_once "Model/CategoriasDAO.php";

class CategoriasControl
{

    public function getCategories()
    {
        $objCat = new CategoriasDAO();

        return $objCat->getCategories();
    }
}
