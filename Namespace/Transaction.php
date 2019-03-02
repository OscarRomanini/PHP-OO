<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 01/03/2019
 * Time: 18:30
 */

$connection = new PDO("mysql:host=localhost;dbname=php", "root", "");

$connection->beginTransaction();

$stmt = $connection->prepare("DELETE FROM usuarios WHERE idusuario = ? ");

$id=1;

$stmt->execute(array($id));

$connection->commit();

echo "Delete ok!";

?>


