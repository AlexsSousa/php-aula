<?php
require_once "Vo/Categorias.php";

class CategoriasDAO
{

    public function getCategories()
    {

        $vConn = ConexaoDAO::abreConexao();
        $itens = new ArrayObject();

        $sql = "SELECT * FROM categories";
        $result = mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

        while ($row = mysqli_fetch_array($result)) {

            $objCat = new Categorias();

            $objCat->setId($row['CategoryID']);
            $objCat->setNome($row['CategoryName']);
            $objCat->setDescricao($row['Description']);

            $itens->append($objCat);
        }

        return $itens;
    }

    public function getCategory($tmpCategoryID)
    {

        $vConn = ConexaoDAO::abreConexao();
        $itens = new ArrayObject();

        $sql = "SELECT * FROM categories WHERE CategoryID = '$tmpCategorieID'";
        $result = mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

        while ($row = mysqli_fetch_array($result)) {

            $objCat = new Categorias();

            $objCat->setId($row['CategoryID']);
            $objCat->setNome($row['CategoryName']);
            $objcate->setDescricao($row['Description']);

            $itens->append($objCat);
        }

        return $itens[0];
    }

    public function setCategory($tmpCategory)
    {

        $vConn = ConexaoDAO::abreConexao();

        $sql = "INSERT INTO categories('CategoryName', 'Description')
                VALUES('$tmpCategory->getNome()','$tmpCategory->getDescricao()')";

        mysqli_query($vConn, $sql) or die(mysqli_error($vConn));
    }
}
