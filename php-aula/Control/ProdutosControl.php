<?php
require_once "Vo/Produtos.php";
require_once "Model/ProdutosDAO.php";

class ProdutosControl
{
    public function getProducts()
    {
        $objProd = new ProdutosDAO();
        return $objProd->getProducts();
    }

    public function getProduct($tmpProdId)
    {
        $objProd = new ProdutosDAO();
        return $objProd->getProduct($tmpProdId);
    }

    public function setProduct()
    {
        $objProd = new Produtos();
        $bdProd = new ProdutosDAO();

        $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
        $forn = filter_var($_POST['forn'], FILTER_SANITIZE_NUMBER_INT);
        $cat = filter_var($_POST['cat'], FILTER_SANITIZE_NUMBER_INT);
        $preco = filter_var($_POST['preco'], FILTER_SANITIZE_STRING);
        $qtd = filter_var($_POST['qtd'], FILTER_SANITIZE_NUMBER_INT);

        $objProd->setId($_GET['produto']);
        $objProd->setNome($nome);
        $objProd->setFornId($forn);
        $objProd->setCatId($cat);
        $objProd->setPreco(number_format($preco, 2));
        $objProd->setQtd($qtd);


        $bdProd->setProduct($objProd);

        header("location: /php-aula/?page=2");
    }

    public function updateProduct()
    {
        $objProd = new Produtos();
        $bdProd = new ProdutosDAO();

        $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
        $forn = filter_var($_POST['forn'], FILTER_SANITIZE_NUMBER_INT);
        $cat = filter_var($_POST['cat'], FILTER_SANITIZE_NUMBER_INT);
        $preco = filter_var($_POST['preco'], FILTER_SANITIZE_STRING);
        $qtd = filter_var($_POST['qtd'], FILTER_SANITIZE_NUMBER_INT);

        $objProd->setId($_GET['produto']);
        $objProd->setNome($nome);
        $objProd->setFornId($forn);
        $objProd->setCatId($cat);
        $objProd->setPreco(number_format($preco, 2));
        $objProd->setQtd($qtd);

        $bdProd->updateProduct($objProd);

        header("location: /php-aula/?page=2");

    }

    public function deleteProduct()
    {
        $bdProd = new ProdutosDAO();

        $ProductID = $_GET['produto'];

        $bdProd->deleteProduct($ProductID);

        header("location: /php-aula/?page=2");

    }
}
