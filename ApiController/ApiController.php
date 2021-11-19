<?php

require_once "./Model/commentsModel.php";
require_once "./View/itemView.php";
require_once "./Helpers/AutHelper.php";

class ApiController{
    private $commentsModel;
    private $view;
    private $helper;

    function __construct(){
        $this->commentsModel = new commentsModel;
        $this->view = new view;
        $this->helper = new AuthHelper;
    }

    function commentsSection(){
        $comments = $this->commentsModel->getComments();
    }
}