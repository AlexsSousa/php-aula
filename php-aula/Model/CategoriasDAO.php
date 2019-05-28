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

        $sql = "SELECT * FROM categories WHERE CategoryID = '$tmpCategoryID'";
        $result = mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

        while ($row = mysqli_fetch_array($result)) {

            $objCat = new Categorias();

            $objCat->setId($row['CategoryID']);
            $objCat->setNome($row['CategoryName']);
            $objCat->setDescricao($row['Description']);

            $itens->append($objCat);
        }

        return $itens[0];
    }

    public function searchCategory($tmpCategory)
    {
        $vConn = ConexaoDAO::abreConexao();
        $itens = new ArrayObject();

        $sql = "SELECT * FROM categories WHERE CategoryName LIKE '%$tmpCategory%'";
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


    public function updateCategory($tmpObjCat)
    {
        $vConn = ConexaoDAO::abreConexao();

        $sql = "UPDATE categories
                SET `CategoryName` = '" . $tmpObjCat->getNome() . "',
                    `Description` = '" . $tmpObjCat->getDescricao() . "'
                WHERE `CategoryID` = '" . $tmpObjCat->getId() . "'";

        mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

    }

    public function setCategory($tmpCategory)
    {

        $vConn = ConexaoDAO::abreConexao();

        $sql = "INSERT INTO categories(CategoryName, Description)
                VALUES('".$tmpCategory->getNome()."','".$tmpCategory->getDescricao()."')";

        mysqli_query($vConn, $sql) or die(mysqli_error($vConn));
    }

    public function deleteCategory($tmpCategoryID)
    {
        $vConn = ConexaoDAO::abreConexao();

        $sql = "DELETE FROM categories WHERE `CategoryID` = '" . $tmpCategoryID . "'";

        mysqli_query($vConn, $sql) or die(mysqli_error($vConn));
    }
}
