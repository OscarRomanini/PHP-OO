<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 02/03/2019
 * Time: 15:29
 */


$name = "images";

if ((!is_dir($name))){

    mkdir($name);
    echo" Diretorio $name criado com sucesso";
}else{
    echo "O diretorio ja existe";
}