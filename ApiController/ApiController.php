<?php

require_once "./Model/commentsModel.php";
require_once "./View/apiView.php";
require_once "./Helpers/AutHelper.php";

class ApiController{
    private $commentsModel;
    private $view;
    private $helper;

    function __construct(){
        $this->commentsModel = new commentsModel;
        $this->view = new apiView;
        $this->helper = new AuthHelper;
    }

    function commentsSection($params = null){
        $idItem = $params[":ID"];
        $comments = $this->commentsModel->getCommentsByIdItem($idItem);
        return $this->view->response($comments, 200);
    }
    
    function deleteComment($params = null){
        $idComment = $params[":ID"];
        $comments = $this->commentsModel->getCommentsById($idComment);
        if($comments){
            $this->commentsModel->deleteComment($idComment);
            return $this->view->response("El comentario se borro", 200);
        }else{
            return $this->view->response("El comentario no existe", 404);
        }
    }

    function addComment(){
        $body = $this->body();
        $this->commentsModel->insertComment($body->comentario , $body->valoracion, $body->id_item, $body->id_user);
        $comment = $this->commentsModel->getCommentsByIdItem($body->id_item);
        if($comment){
            return $this->view->response("El comentario se agrego!", 200);
        }else{
            return $this->view->response("Error al agregar el mensaje", 404);
        }
    }

    function body(){
        $body = file_get_contents("php://input"); 
        return json_decode($body);
    }
 

}