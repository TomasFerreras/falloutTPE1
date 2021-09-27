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

    function deleteItem($nameItem){
        $sentencia = $this->itemDB->prepare("DELETE FROM db_item WHERE name_item=?");
        $sentencia->execute(array($nameItem));
    }

    function editItem($nameItem, $name, $description, $weight, $category ){
      $sentencia = $this->itemDB->prepare("UPDATE db_item SET name_item = '".$name."', description_item= '".$description."', weight_item= '".$weight."', category= '".$category."' WHERE name_item=?");
      $sentencia->execute(array($nameItem));
    }
}