<?php

require_once "./Model/itemModel.php";
require_once "./Model/categoryModel.php";
require_once "./View/itemView.php";
require_once "./Helpers/AutHelper.php";

class itemController{

    private $itemModel;
    private $categoryModel;
    private $view;
    private $helper;
    private $verify;

    function __construct(){
        $this->categoryModel = new categoryModel;
        $this->itemModel = new itemModel;
        $this->view = new view;
        $this->helper = new AuthHelper;

        if(isset($_SESSION['role'])){
            $this->verify = $_SESSION['role'];
        }else{
            $this->verify = false;
        }
    }

    function showHome(){
        $this->helper->checkLoggedIn();
        $this->view->Home($this->verify);
    }
    
    function showAllItems(){
        $this->helper->checkLoggedIn();
        $items = $this->itemModel->getItems();
        $this->view->AllItems($items, $this->verify);
    }

    function showItem($item){
        $this->helper->checkLoggedIn();
        $items = $this->itemModel->getItems();
        $this->view->ItemsDescription($items , $item, $this->verify);
    }

    function showItems_Categories($id_category){
        $this->helper->checkLoggedIn();
        $Items_Category = $this->itemModel->getItems();
        $this->view->showItemPerCategory($Items_Category, $id_category, $this->verify);
    }

    function search(){
        $this->helper->checkLoggedIn();
        $this->helper->checkRole();       
        $categories = $this->categoryModel->getCategories();
        $items = $this->itemModel->getItems();
        $this->view->searchAdminPage($items, $categories, $_POST['search'] );   
    }

    function createItem(){
        $this->itemModel->insertItem($_POST['name'],$_POST['description'],$_POST['weight'],$_POST['category']);
        $this->view->showAdminPage();
    }

    function deleteItem($nameItem){
        $this->itemModel->deleteItem($nameItem);
        $this->view->showAdminPage();
    }

    function editItem($nameItem){
        $this->itemModel->editItem($nameItem,$_POST['nameItem'], $_POST['desciptionItem'], $_POST['weightItem'], $_POST['itemCategory'] );
        $this->view->showAdminPage();
    }    
}