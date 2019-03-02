<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 27/02/2019
 * Time: 18:14
 */

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

}

$meuEndereco = new Endereco("Av. Tamandare", "655", "Maringá");

var_dump($meuEndereco);

?>