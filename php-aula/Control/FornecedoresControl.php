<?php

require_once "Model/FornecedoresDAO.php";

class FornecedoresControl
{

    public function getSuppliers()
    {
        $objForn = new FornecedoresDAO();

        return $objForn->getSuppliers();
    }

    public function getSupplier()
    {
        $objForn = new FornecedoresDAO();
        $fornecedor = $_GET['fornecedor'];

        return $objForn->getSupplier($fornecedor);
    }

    public function setSupplier()
    {
        $objForn = new FornecedoresDAO();
        $forn = new Fornecedores();

        $forn->setNome($_POST['nome']);
        $forn->setResponsavel($_POST['responsavel']);
        $forn->setCargoResponsavel($_POST['cargoResponsavel']);
        $forn->setEndereco($_POST['endereco']);
        $forn->setCidade($_POST['cidade']);
        $forn->setEstado($_POST['estado']);
        $forn->setPais($_POST['pais']);
        $forn->setCep($_POST['cep']);
        $forn->setTelefone($_POST['telefone']);
        $forn->setSite($_POST['site']);

        $objForn->setSupplier($forn);

        header("location: http://localhost/php-aula/?page=4");
    }

    public function updateSupplier()
    {
        $objForn = new Fornecedores();
        $bdProd = new FornecedoresDAO();

        $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
        $responsavel = filter_var($_POST['responsavel'], FILTER_SANITIZE_STRING);
        $cargoResponsavel = filter_var($_POST['cargoResponsavel'], FILTER_SANITIZE_STRING);
        $endereco = filter_var($_POST['endereco'], FILTER_SANITIZE_STRING);
        $cidade = filter_var($_POST['cidade'], FILTER_SANITIZE_STRING);
        $estado = filter_var($_POST['estado'], FILTER_SANITIZE_STRING);
        $cep = filter_var($_POST['cep'], FILTER_SANITIZE_STRING);
        $pais = filter_var($_POST['pais'], FILTER_SANITIZE_STRING);
        $telefone = filter_var($_POST['telefone'], FILTER_SANITIZE_STRING);
        $site = filter_var($_POST['site'], FILTER_SANITIZE_STRING);

        $objForn->setId($_GET['fornecedor']);
        $objForn->setNome($nome);
        $objForn->setResponsavel($responsavel);
        $objForn->setCargoResponsavel($cargoResponsavel);
        $objForn->setEndereco($endereco);
        $objForn->setCidade($cidade);
        $objForn->setEstado($estado);
        $objForn->setCep($cep);
        $objForn->setPais($pais);
        $objForn->setTelefone($telefone);
        $objForn->setSite($site);

        $bdProd->updateSupplier($objForn);

        header("location: http://localhost/php-aula/?page=4");
    }

    public function searchSupplier($forn)
    {
        $objForn = new FornecedoresDAO();
        return $objForn->searchSupplier($forn);
    }


    public function deleteSupplier()
    {
        $bdForn = new FornecedoresDAO();

        $SupplierID = $_GET['fornecedor'];

        $bdForn->deleteSupplier($SupplierID);

        header("location: http://localhost/php-aula/?page=4");
    }
}
