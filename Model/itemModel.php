<?php

class itemModel{
    private $itemDB;

    function __construct(){
        $this->itemDB = new PDO('mysql:host=localhost;'.'dbname=db_items;charset=utf8', 'root', '');
    }

    function getItems(){
        $sentencia = $this->itemDB->prepare( "select * from db_item");
        $sentencia->execute();
        $items = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $items;
    }

    function insertItem($name,$description,$weight,$category){
        $sentencia = $this->itemDB->prepare("INSERT INTO db_item(name_item,description_item, weight_item, category ) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($name,$description,$weight, $category ));
    }
}