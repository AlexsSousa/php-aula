<?php
require_once "Vo/Produtos.php";

class ProdutosDAO
{

    public function getProducts()
    {
        $vConn = ConexaoDAO::abreConexao();
        $itens = new ArrayObject();

        $sql = "SELECT * FROM products as P
                INNER JOIN categories as C ON P.CategoryID = C.CategoryID
                INNER JOIN suppliers as S ON P.SupplierID = S.SupplierID
                ORDER BY P.ProductID ASC";

        $result = mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

        while ($row = mysqli_fetch_assoc($result)) {

            $objProd = new Produtos();

            $objProd->setID($row['ProductID']);
            $objProd->setNome($row['ProductName']);
            $objProd->setFornId($row['SupplierID']);
            $objProd->setForn($row['CompanyName']);
            $objProd->setCatId($row['CategoryID']);
            $objProd->setCat($row['CategoryName']);
            $objProd->setPreco($row['UnitPrice']);
            $objProd->setQtd($row['UnitsInStock']);

            $itens->append($objProd);
        }

        return $itens;
    }

    public function getProduct($tmpProdID)
    {

        $vConn = ConexaoDAO::abreConexao();
        $itens = new ArrayObject();

        $sql = "SELECT * FROM products as P
                INNER JOIN categories as C ON P.CategoryID = C.CategoryID
                INNER JOIN suppliers as S ON P.SupplierID = S.SupplierID
                WHERE P.ProductID = $tmpProdID";

        $result = mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

        while ($row = mysqli_fetch_assoc($result)) {

            $objProd = new Produtos();

            $objProd->setID($row['ProductID']);
            $objProd->setNome($row['ProductName']);
            $objProd->setFornId($row['SupplierID']);
            $objProd->setForn($row['CompanyName']);
            $objProd->setCatId($row['CategoryID']);
            $objProd->setCat($row['CategoryName']);
            $objProd->setPreco($row['UnitPrice']);
            $objProd->setQtd($row['UnitsInStock']);

            $itens->append($objProd);
        }

        return $itens[0];
    }

    public function searchProduct($tmpProd)
    {

        $vConn = ConexaoDAO::abreConexao();
        $itens = new ArrayObject();

        $sql = "SELECT * FROM products as P
                INNER JOIN categories as C ON P.CategoryID = C.CategoryID
                INNER JOIN suppliers as S ON P.SupplierID = S.SupplierID
                WHERE P.ProductName LIKE '%$tmpProd%'";
                
        $result = mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

        while ($row = mysqli_fetch_assoc($result)) {

            $objProd = new Produtos();

            $objProd->setID($row['ProductID']);
            $objProd->setNome($row['ProductName']);
            $objProd->setFornId($row['SupplierID']);
            $objProd->setForn($row['CompanyName']);
            $objProd->setCatId($row['CategoryID']);
            $objProd->setCat($row['CategoryName']);
            $objProd->setPreco($row['UnitPrice']);
            $objProd->setQtd($row['UnitsInStock']);

            $itens->append($objProd);
        }

        return $itens;
    }

    public function setProduct($tmpObjProd)
    {
        $vConn = ConexaoDAO::abreConexao();

        $sql = "INSERT INTO products(`ProductName`, `SupplierID`, `CategoryID`, `UnitPrice`, `UnitsInStock`)
        VALUES ('" . $tmpObjProd->getNome() . "', '" . $tmpObjProd->getFornID() . "', '" . $tmpObjProd->getCatID() . "', '" . $tmpObjProd->getPreco() . "',
        '" . $tmpObjProd->getQtd() . "')";

        mysqli_query($vConn, $sql) or die(mysqli_error($vConn));
    }

    public function updateProduct($tmpObjProd)
    {
        $vConn = ConexaoDAO::abreConexao();

        $sql = "UPDATE products
                SET `ProductName` = '" . $tmpObjProd->getNome() . "',
                    `SupplierID` = '" . $tmpObjProd->getFornID() . "',
                    `CategoryID` = '" . $tmpObjProd->getCatID() . "',
                    `UnitPrice` = '" . $tmpObjProd->getPreco() . "',
                    `UnitsInStock` = '" . $tmpObjProd->getQtd() . "'
                WHERE `ProductID` = '" . $tmpObjProd->getId() . "'";

        mysqli_query($vConn, $sql) or die(mysqli_error($vConn));
    }

    public function deleteProduct($tmpProductId)
    {
        $vConn = ConexaoDAO::abreConexao();

        $sql = "DELETE FROM products WHERE `ProductID` = '" . $tmpProductId . "'";

        mysqli_query($vConn, $sql) or die(mysqli_error($vConn));
    }
}
