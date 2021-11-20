<?php

class commentsModel{
    private $commentsDB;

    function __construct(){
        $this->commentsDB = new PDO('mysql:host=localhost;'.'dbname=db_comments;charset=utf8', 'root', '');
    }

    function getComments($id){
        $sentencia = $this->commentsDB->prepare("SELECT * from comments WHERE id_item = ?");
        $sentencia->execute(array($id));
        $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }
}