<?php

class Categoria
{

    public $id;
    public $nome;

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = new PDO('mysql:host=localhost;dbname=estoque', 'root', 'alura');
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir()
    {
        $query = "INSERT INTO categorias (nome) VALUES ('" . $this->nome . "')";
        $conexao = new PDO('mysql:host=localhost;dbname=estoque', 'root', 'alura');
        //execução de um insert no php
        $conexao->exec($query);
    }
}