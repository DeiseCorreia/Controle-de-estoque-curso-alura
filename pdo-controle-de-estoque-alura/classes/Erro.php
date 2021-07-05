<?php

class Erro
{
    public static function trataErro(Exception $e)
    {
        if(DEBUG){
            echo '<pre>';
            var_dump($e);
            echo '</pre>';
           
        }else{
            include 'erro.php';
        }
        exit;
    }
}