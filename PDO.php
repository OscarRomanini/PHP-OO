<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 28/02/2019
 * Time: 19:57
 */

$connect = new PDO("mysql:host=localhost;dbname=php", "root", "");

$stmt = $connect->prepare("insert into usuarios(usuario, senha) values(:USUARIO, :SENHA)");

$usuario = "admin";
$senha = "admin";

$stmt->bindParam(":USUARIO", $usuario);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "inserido!";


//UPDATE ---->   "UPDATE usuarios SET  usuario = :USUARIO, senha = :SENHA WHERE id = :ID
//DELETE ----> "DELETE FROM usuarios WHERE idusuario - :ID


 ?>


