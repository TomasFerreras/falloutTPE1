<?php
require_once "./Model/categoryModel.php";
require_once "./View/categoryView.php";
require_once "./Helpers/AutHelper.php";

class categoryController{

    private $categoryModel;
    private $view;
    private $helper;

    function __construct(){
        $this->categoryModel = new categoryModel;
        $this->view = new categoryView;
        $this->helper = new AuthHelper;
    }

    function showAllCategories(){
        $this->helper->checkLoggedIn();
        $categories = $this->categoryModel->getCategories();
        $this->view->AllCategories($categories, $_SESSION['role']);
    }
}