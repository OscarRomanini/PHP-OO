<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 02/03/2019
 * Time: 15:35
 */

$images = scandir("images");

foreach ($images as $img){
    if(!in_array($img, array(".", ".."))){

        $filename = "images". DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);

        array_push($data, $info);
    }
}

?>