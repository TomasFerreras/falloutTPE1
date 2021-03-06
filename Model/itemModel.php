<?php

class itemModel{
    private $itemDB;

    function __construct(){
        $this->itemDB = new PDO('mysql:host=localhost;'.'dbname=db_items;charset=utf8', 'root', '');
    }

    function getItems(){
        $sentencia = $this->itemDB->prepare( "SELECT items.*, category.name_category FROM items JOIN category ON items.id_category = category.id_category");
        $sentencia->execute();
        $items = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $items;
    }

    function getItem($name){
        $sentencia = $this->itemDB->prepare("SELECT * FROM items WHERE name_item = ?");
        $sentencia->execute(array($name));
        $item = $sentencia->fetch(PDO::FETCH_OBJ);
        return $item;
    }

    function insertItem($name,$description,$weight,$category, $destiny){
        $sentencia = $this->itemDB->prepare("INSERT INTO items(name_item,description_item, weight_item, id_category, image) VALUES(?, ?, ?, ?, ?)");
        $sentencia->execute(array($name,$description,$weight, $category, $destiny ));
    }

    function deleteItem($nameItem){
        $sentencia = $this->itemDB->prepare("DELETE FROM items WHERE name_item=?");
        $sentencia->execute(array($nameItem));
    }

    function editItem($nameItem, $name, $description, $weight, $category ){
      $sentencia = $this->itemDB->prepare("UPDATE items SET name_item = '".$name."', description_item= '".$description."', weight_item= '".$weight."', id_category= '".$category."' WHERE name_item=?");
      $sentencia->execute(array($nameItem));
    }
}