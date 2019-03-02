<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 28/02/2019
 * Time: 19:10
 */

spl_autoload_register(function($nameClass){
   $dirClass = "class";
   $filename = "$dirClass" . DIRECTORY_SEPARATOR . "$nameClass";

   if(file_exists($filename) === true){
       require_once($filename);
   }

});



?>