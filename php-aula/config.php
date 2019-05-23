<?php
class ConexaoDAO
{
    private $host, $user, $pass, $db;
    public $vConn;

    public static function abreConexao()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "northwind";

        $vConn = mysqli_connect($host, $user, $pass, $db);

        return $vConn;
    }
}
