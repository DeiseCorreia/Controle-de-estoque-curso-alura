<?php

//criando um registro de categorias
require_once 'classes/Categoria.php';

$categoria = new Categoria();
$lista_de_categoria = $categoria->listar();

foreach($lista_de_categoria as $linha){
    $categoria_edit = new Categoria($linha['id']);
    $categoria_edit->nome = 'Categoria' . $categoria_edit->nome;
    $categoria_edit->atualizar();
}
$nova_linha_de_categoria = $categoria->listar();
echo '<pre>';
print_r($nova_linha_de_categoria);

//resultado 
/*
[0] => Array
        (
            [id] => 1
            [0] => 1
            [nome] => Categoria Livros
            [1] => Categoria Livros
        )
        e assim por adiante com todas as categorias
*/