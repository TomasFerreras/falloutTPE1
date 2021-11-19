<?php

class commentsModel{
    private $commentsDB;

    function __construct(){
        $this->commentsDB = new PDO('mysql:host=localhost;'.'dbname=db_comments;charset=utf8', 'root', '');
    }

    function getComments(){
        $sentencia = $this->commentsDB->prepare("select * from comments");
        $sentencia->execute();
        $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }
}