<?php

require_once "Model/CategoriasDAO.php";

class CategoriasControl
{

    public function getCategories()
    {
        $objCat = new CategoriasDAO();

        return $objCat->getCategories();
    }

    public function getCategory($tmpId)
    {

        $objCat = new CategoriasDAO();

        return $objCat->getCategory($tmpId);
    }

    public function searchCategory($tmpCat)
    {
        $objCat = new CategoriasDAO();
        return $objCat->searchCategory($tmpCat);
    }

    public function deleteCategory($tmpId)
    {

        $objCat = new CategoriasDAO();

        $objCat->deleteCategory($tmpId);

        header("location: http://localhost/php-aula/?page=6");
    }

    public function setCategory()
    {
        $objCat = new CategoriasDAO();
        $cat = new Categorias();

        $cat->setNome($_POST['nome']);
        $cat->setDescricao($_POST['descricao']);
        
        $objCat->setCategory($cat);

        header("location: http://localhost/php-aula/?page=6");
    }

    public function updateCategory()
    {

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $id = $_GET['categoria'];

        $objBD = new CategoriasDAO();
        $objCat = new Categorias();

        $objCat->setNome($nome);
        $objCat->setDescricao($descricao);
        $objCat->setId($id);

        $objBD->updateCategory($objCat);


        header("location: http://localhost/php-aula/?page=6");
    }
}
