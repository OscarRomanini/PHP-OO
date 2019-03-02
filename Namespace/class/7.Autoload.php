<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 27/02/2019
 * Time: 20:47
 */

function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse.".php");
    }

}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse){

    if(file_exists("5.Classe_abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
        require_once ("5.Classe_abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }
});




$carro = new DelRey();

$carro->acelerar(80);



?>


