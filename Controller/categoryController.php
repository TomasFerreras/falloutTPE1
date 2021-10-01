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

    function showItems_Categories($id_category){
        $Items_Category = $this->itemModel->getItems();
        $this->view->showConsumables($Items_Category, $id_category);
    }
}