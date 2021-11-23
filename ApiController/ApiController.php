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
        $comments = $this->commentsModel->getComments($idItem);
        return $this->view->response($comments, 200);
    }
    
    function deleteComment($params = null){
        $idComment = $params[":ID"];
        $this->commentsModel->deleteComment($idComment);
        return $this->view->response("El comentario se borro", 200);
    }

    function addComment(){
        $body = $this->body();
        $this->commentsModel->insertComment($body->comentario , $body->valoracion, $body->id_item, $body->id_user);
        return $this->view->response("El comentario se agrego! :p", 200);
    }

    function body(){
        $body = file_get_contents("php://input"); 
        return json_decode($body);
    }
 

    // input =, > , < 5
}