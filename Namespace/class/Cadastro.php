<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 28/02/2019
 * Time: 19:21
 */

class Cadastro {

    private $nome;
    private $email;
    private $senha;


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha): void
    {
        $this->senha = $senha;
    }

    public function __toString()
    {
        return json_encode(array(
            "nome"=>$this->$this->getNome(),
            "email"=>$this->$this->getEmail(),
            "senha"=>$this->$this->getSenha()
        ));
    }


}


?>
