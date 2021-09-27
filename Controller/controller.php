<?php

require_once "./Model/categoryModel.php";
require_once "./Model/itemModel.php";
require_once "./View/view.php";
class Controller{

    private $itemModel;
    private $categoryModel;
    private $view;

    function __construct(){
        $this->itemModel = new itemModel;
        $this->categoryModel = new categoryModel;
        $this->view = new view;
    }

    function showHome(){
        $this->view->Home();
    }
    
    function showAllItems(){
        $items = $this->itemModel->getItems();
        $this->view->AllItems($items);
    }

    function showAllCategories(){
        $categories = $this->categoryModel->getCategories();
        $this->view->AllCategories($categories);
    }

    function showItems_Categories($id_category){
        $Items_Category = $this->itemModel->getItems();
        $this->view->showConsumables($Items_Category, $id_category);
    }

    function showItem($item){
        $items = $this->itemModel->getItems();
        $this->view->ItemsDescription($items , $item);
    }

    function showLogin(){
        $this->view->Login();
    }

    function showAdminLogin(){
        $this->view->AdminLogin();
    }

    function showNotFound(){
        $this->view->notFound();
    }

    function showAdmin(){
        $this->view->adminPage();
    }   

    function search(){
        $items = $this->itemModel->getItems();
        $this->view->searchAdminPage($items, $_POST['search'] );
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