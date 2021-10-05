<?php
require_once "./Model/categoryModel.php";
require_once "./View/categoryView.php";

class categoryController{

    private $categoryModel;
    private $view;

    function __construct(){
        $this->categoryModel = new categoryModel;
        $this->view = new categoryView;

        if(isset($_SESSION['loged'])){
            $this->verify = true;
        }else{
            $this->verify = false;
        }
    }

    function showAllCategories(){
        $categories = $this->categoryModel->getCategories();
        $this->view->AllCategories($categories, $this->verify);
    }
}