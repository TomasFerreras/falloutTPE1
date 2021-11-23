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
    }

    function showHome(){
        $this->helper->checkLoggedIn();
        $this->view->Home($_SESSION['role']);
    }
    
    function showAllItems(){
        $this->helper->checkLoggedIn();
        $items = $this->itemModel->getItems();
        $this->view->AllItems($items, $_SESSION['role']);
    }

    function showItem($item){
        $this->helper->checkLoggedIn();
        
        $items = $this->itemModel->getItems();
        $this->view->ItemsDescription($items , $item, $_SESSION['role'], $_SESSION['userId']);
    }

    function showItems_Categories($id_category){
        $this->helper->checkLoggedIn();
        $Items_Category = $this->itemModel->getItems();
        $this->view->showItemPerCategory($Items_Category, $id_category, $_SESSION['role']);
    }

    function search(){
        $this->helper->checkLoggedIn();
        $this->helper->checkRole();       
        $categories = $this->categoryModel->getCategories();
        $items = $this->itemModel->getItems();
        $this->view->searchAdminPage($items, $categories, $_POST['search'] );   
    }

    //FIXME:FIX THIS

    function createItem(){
        if ($_FILES["input_img"]["type"]=="image/png" || $_FILES["input_img"]["type"]=="image/jpg"){
            if(($_FILES["input_img"]["type"]=="image/png")){
                $type = ".png";
            }else if (($_FILES["input_img"]["type"]=="image/jpg")){
                $type = ".jpg";
            }
            $img=$_FILES["input_img"];
            $origin=$img["tmp_name"];
            $destiny="public/".uniqid().$type;
            copy($origin, $destiny);
            $this->itemModel->insertItem($_POST['name'],$_POST['description'],$_POST['weight'],$_POST['category'], $destiny);
            $this->view->showAdminPage();
        }else {
            $this->itemModel->insertItem($_POST['name'],$_POST['description'],$_POST['weight'],$_POST['category'], null);
            $this->view->showAdminPage();
        }

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