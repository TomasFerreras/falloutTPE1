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


}