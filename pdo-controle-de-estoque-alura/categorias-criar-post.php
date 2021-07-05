<?php

    require_once 'global.php';
    try{
    $categoria = new Categoria();
    $nome = $_POST['nome'];
    $categoria->nome = $nome;//populando o atribuito
    $categoria->inserir($nome);

    header('Location: categorias.php');//função redirecionar o usuário
    }catch(Exception $e){
         Erro::trataErro($e);
    }