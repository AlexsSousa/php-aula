<?php

require_once "Vo/Fornecedores.php";

class FornecedoresDAO
{

    public function getSuppliers()
    {

        $vConn = ConexaoDAO::abreConexao();
        $itens = new ArrayObject();

        $sql = "SELECT * FROM suppliers ORDER BY SupplierID";
        $result = mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

        while ($row = mysqli_fetch_array($result)) {

            $objForn = new Fornecedores();

            $objForn->setId($row['SupplierID']);
            $objForn->setNome($row['CompanyName']);
            $objForn->setResponsavel($row['ContactName']);
            $objForn->setCargoResponsavel($row['ContactTitle']);
            $objForn->setEndereco($row['Address']);
            $objForn->setCidade($row['City']);
            $objForn->setEstado($row['Region']);
            $objForn->setCep($row['PostalCode']);
            $objForn->setPais($row['Country']);
            $objForn->setTelefone($row['Phone']);
            $objForn->setSite($row['HomePage']);

            $itens->append($objForn);
        }

        return $itens;
    }

    public function getSupplier($tmpSupplierID)
    {

        $vConn = ConexaoDAO::abreConexao();
        $itens = new ArrayObject();

        $sql = "SELECT * FROM suppliers WHERE SupplierID = '$tmpSupplierID'";
        $result = mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

        while ($row = mysqli_fetch_array($result)) {

            $objForn = new Fornecedores();

            $objForn->setId($row['SupplierID']);
            $objForn->setNome($row['CompanyName']);
            $objForn->setResponsavel($row['ContactName']);
            $objForn->setCargoResponsavel($row['ContactTitle']);
            $objForn->setEndereco($row['Address']);
            $objForn->setCidade($row['City']);
            $objForn->setEstado($row['Region']);
            $objForn->setCep($row['PostalCode']);
            $objForn->setPais($row['Country']);
            $objForn->setTelefone($row['Phone']);
            $objForn->setSite($row['HomePage']);

            $itens->append($objForn);
        }

        return $itens[0];
    }

    public function setSupplier($tmpSupplier)
    {
        $vConn = ConexaoDAO::abreConexao();

        $sql = "INSERT INTO suppliers( `CompanyName`, `ContactName`, `ContactTitle`,
                `Address`, `City`, `Region`, `PostalCode`, `Country`, `Phone`, `HomePage`)
                VALUES('" . $tmpSupplier->getNome() . "', '" . $tmpSupplier->getResponsavel() . "', '" . $tmpSupplier->getCargoResponsavel() . "',
                '" . $tmpSupplier->getEndereco() . "','" . $tmpSupplier->getCidade() . "','" . $tmpSupplier->getEstado() . "','" . $tmpSupplier->getCep() . "',
                '" . $tmpSupplier->getPais() . "', '" . $tmpSupplier->getTelefone() . "','" . $tmpSupplier->getSite() . "')";

        mysqli_query($vConn, $sql) or die(mysqli_error($vConn));
    }

    public function updateSupplier($tmpSupplier)
    {
        $vConn = ConexaoDAO::abreConexao();

        $sql = "UPDATE suppliers
                SET `CompanyName` = '" . $tmpSupplier->getNome() . "',
                    `ContactName` = '" . $tmpSupplier->getResponsavel() . "',
                    `ContactTitle` = '" . $tmpSupplier->getCargoResponsavel() . "',
                    `Address` = '" . $tmpSupplier->getEndereco() . "',
                    `City` = '" . $tmpSupplier->getCidade() . "',
                    `Region` = '" . $tmpSupplier->getEstado() . "',
                    `PostalCode` = '" . $tmpSupplier->getCep() . "',
                    `Country` = '" . $tmpSupplier->getPais () . "',
                    `Phone` = '" . $tmpSupplier->getTelefone() . "',  
                    `HomePage` = '" . $tmpSupplier->getSite() . "'
                WHERE `SupplierID` = '" . $tmpSupplier->getId() . "'";

        mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

    }

    

    public function deleteSupplier($tmpSupplierId)
    {
        $vConn = ConexaoDAO::abreConexao();

        $sql = "DELETE FROM suppliers WHERE `SupplierID` = '" . $tmpSupplierId . "'";

        mysqli_query($vConn, $sql) or die(mysqli_error($vConn));

    }
}
