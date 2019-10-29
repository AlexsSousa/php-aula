<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Northwind</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container-fluid">

        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost/php-aula/">Northwind</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?page=1">Cadastrar</a></li>
                                <li><a href="?page=2">Listar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Fornecedores
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?page=3">Cadastrar</a></li>
                                <li><a href="?page=4">Listar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Categorias
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?page=13">Cadastrar</a></li>
                                <li><a href="?page=6">Listar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron container" id="conteudo">
            <?php
            if (isset($_GET['page'])) {

                if ($_GET['page'] == 1) {
                    require_once "View/produtos/cadastrarProduto.php";
                } else if ($_GET['page'] == 2) {
                    require_once "View/produtos/listarProdutos.php";
                } else if ($_GET['page'] == 3) {
                    require_once "View/fornecedores/cadastrarFornecedor.php";
                } else if ($_GET['page'] == 4) {
                    require_once "View/fornecedores/listarFornecedores.php";
                } else if ($_GET['page'] == 5) {
                    require_once "View/fornecedores/editarFornecedor.php";
                } else if ($_GET['page'] == 6) {
                    require_once "View/categorias/listarCategorias.php";
                } else if ($_GET['page'] == 7) {
                    require_once "View/produtos/listarProduto.php";
                } else if ($_GET['page'] == 8) {
                    require_once "View/produtos/editarProduto.php";
                } else if ($_GET['page'] == 9) {
                    require_once "View/produtos/removerProduto.php";
                } else if ($_GET['page'] == 10) {
                    require_once "View/fornecedores/listarFornecedor.php";
                } else if ($_GET['page'] == 11) {
                    require_once "View/fornecedores/removerFornecedor.php";
                } else if ($_GET['page'] == 12) {
                    require_once "View/categorias/editarCategoria.php";
                } else if ($_GET['page'] == 13) {
                    require_once "View/categorias/cadastrarCategoria.php";
                } else if ($_GET['page'] == 14) {
                    require_once "View/categorias/removerCategoria.php";
                }
            } else { ?>
                <h1>PHP</h1>
                <p>Projeto em PHP desenvolvido em aula no curso de Ciência da Computação</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="https://github.com/AlexsSousa/php-aula" role="button">Ver Projeto no Github &raquo;</a>
                </p>
            <?php } ?>

        </div> <!-- /container -->

        <script src="assets/js/jQuery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>
</body>

</html>
