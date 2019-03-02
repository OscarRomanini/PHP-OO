<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 27/02/2019
 * Time: 19:56
 */


class Animal{

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Andar";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "Latir";
    }
}

class Gato extends Animal{
    public function falar()
    {
        return "Miar";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Piar";
    }
    public function mover()
    {
        return "Voa e " . parent::mover();  //O parent puxa o metodo do pai
    }
}


$pluto = new Cachorro();

echo $pluto->falar(). "</br>";
echo $pluto->mover(). "</br>";

echo "----------------------------------</br>";

$garfield = new Gato();
echo $garfield->falar();

$Piupiu = new Passaro();
echo $Piupiu->falar();
echo $Piupiu->mover();

