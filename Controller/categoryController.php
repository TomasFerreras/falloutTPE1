<?php
require_once "./Model/categoryModel.php";
require_once "./View/categoryView.php";

class categoryController{

    private $categoryModel;
    private $view;

    function __construct(){
        $this->categoryModel = new categoryModel;
        $this->view = new categoryView;
    }

    function showAllCategories(){
        $categories = $this->categoryModel->getCategories();
        $this->view->AllCategories($categories);
    }
}