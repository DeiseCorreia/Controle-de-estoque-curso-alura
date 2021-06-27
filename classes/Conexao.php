<?php

class Conexao
{
    public static function pegarConexao()
    {
        $conexao = new PDO('mysql:host=localhost;dbname=estoque', 'root', 'alura');
        return $conexao;
    }
}