<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 02/03/2019
 * Time: 13:33
 */

spl_autoload_register(function($class_name){

    $filename = $class_name. ".php";

    if (file_exists(($class_name))){
        require_once ($filename);
    }
});