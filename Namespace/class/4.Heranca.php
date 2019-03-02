<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 27/02/2019
 * Time: 18:43
 */


class Documento{
    private $numero;


    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero($n): void
    {
        $this->numero = $n;
    }


}

class Cpf extends Documento{

    public function validar():bool{

    }
}

?>