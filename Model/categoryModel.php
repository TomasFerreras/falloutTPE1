<?php

class categoryModel{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_items;charset=utf8', 'root', '');
    }

    function getCategories(){
        $sentencia = $this->db->prepare( "select * from db_category");
        $sentencia->execute();
        $categories = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }
}