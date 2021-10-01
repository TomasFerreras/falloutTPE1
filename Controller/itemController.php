<?php

require_once "./Model/itemModel.php";
require_once "./View/itemView.php";
class itemController{

    private $itemModel;
    private $view;

    function __construct(){
        $this->itemModel = new itemModel;
        $this->view = new view;
    }

    function showHome(){
        $this->view->Home();
    }
    
    function showAllItems(){
        $items = $this->itemModel->getItems();
        $this->view->AllItems($items);
    }

    function showItem($item){
        $items = $this->itemModel->getItems();
        $this->view->ItemsDescription($items , $item);
    }

    function showItems_Categories($id_category){
        $Items_Category = $this->itemModel->getItems();
        $this->view->showConsumables($Items_Category, $id_category);
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
    }

    


    
}