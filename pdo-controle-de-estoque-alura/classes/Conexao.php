<?php

class Conexao
{
    public static function pegarConexao()
    {
        $conexao = new PDO(DB_DRIVE .':host=' . DB_HOSTNAME .';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
        $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//se der algum problema no PDO ele entra nessa linha e mostra um erro específico dele!
        return $conexao;
    }
    /*no caso no exception para naquele momento,
    ou seja ele não dá prosseguimento com a leitura.
    */
}