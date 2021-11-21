<?php

class commentsModel{
    private $comments;

    function __construct(){
        $this->comments = new PDO('mysql:host=localhost;'.'dbname=db_comments;charset=utf8', 'root', '');
    }

    function getComments($id){
        $sentencia = $this->comments->prepare("SELECT * from comments WHERE id_item = ?");
        $sentencia->execute(array($id));
        $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }

    function deleteComment($idComment){
        $sentencia = $this->comments->prepare("DELETE FROM comments WHERE id=?");
        $sentencia->execute(array($idComment));
    }

    function insertComment($comment, $rating, $id_item){
        $sentencia = $this->comments->prepare("INSERT INTO comments(comentario,valoracion,id_item, id_user) values(?,?,?, ?)")
        $sentencia->execute(array($comment, $rating,$id_item , null));
    }
}