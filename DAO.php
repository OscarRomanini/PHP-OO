<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 01/03/2019
 * Time: 18:49
 */



class sql extends PDO{

private $connect;

public function __construct()
{

    $this->connect = new PDO("mysql:host=localhost;dbname=php", "root", "");

}

private function setParams($statement, $parameters = array()){

    foreach($parameters as $key => $value){

        $statement->bindParam($key, $value);
    }
}

private function setParam($statement, $key, $value){

    $statement->bindParam($key, $value);
}


public function query($rawQuery, $params = array()){

    $stmt = $this->connect->prepare($rawQuery);
    $this->setParams($stmt, $params);
    return $stmt->execute();


}

public function select($rawQuery, $params = array()):array
{

    $stmt = $this->query($rawQuery, $params);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


}


?>