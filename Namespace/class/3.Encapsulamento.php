<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 27/02/2019
 * Time: 18:24
 */

class pessoa{

    public $nome = "Rasmus lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }

}

class Programador extends Pessoa{

}



$objeto = new Programador();

echo $objeto->verDados(). "</br>";
// echo $objeto->idade. "</br>";

?>