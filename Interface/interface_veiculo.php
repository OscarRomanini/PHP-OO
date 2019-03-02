<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 27/02/2019
 * Time: 19:19
 */


interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}


class Civic implements Veiculo{

    public function acelerar($velocidade){
        echo "O veívulo acelerou até ". $velocidade. " km/h";
    }

    public function  frenar($velocidade)
    {
        echo "O veículo frenou até ". $velocidade. " km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha ". $marcha;
    }

}


?>