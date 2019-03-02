<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 02/03/2019
 * Time: 13:39
 */

require_once ("config.php");

$sql = new sql();

$usuarios = $sql->SELECT("select * from usuarios");

echo json_encode("$usuarios");