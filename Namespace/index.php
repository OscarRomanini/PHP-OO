<?php


require_once ("config.php");

    $cad = new Cadastro();

    $cad->setNome("Juca");
    $cad->setEmail("Juca@gmail.com");
    $cad->setSenha("123456");

    echo $cad;

?>