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

    function showItem($nameItem){
        $this->helper->checkLoggedIn();
        $item = $this->itemModel->getItem($nameItem);
        if($item){
            $this->view->ItemsDescription(  $item , $_SESSION['role'], $_SESSION['userId']);
        }else{
            $this->helper->notFound("item doesn't exist");
        }
    }

    function showItems_Categories($id_category){
        $this->helper->checkLoggedIn();
        $Items_Category = $this->itemModel->getItems();
        $this->view->showItemPerCategory($Items_Category, $id_category, $_SESSION['role']);
    }

    function search(){
        $this->helper->checkRole();       
        $categories = $this->categoryModel->getCategories();
        $items = $this->itemModel->getItems();
        $this->view->searchAdminPage($items, $categories, $_POST['search'] );   
    }

    //FIXME:FIX THIS

    function createItem(){
        if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['weight']) && !empty($_POST['category'])){
            if ($_FILES["input_img"]["type"]=="image/png" || $_FILES["input_img"]["type"]=="image/jpeg"){
                if(($_FILES["input_img"]["type"]=="image/png")){
                    $type = ".png";
                }else if (($_FILES["input_img"]["type"]=="image/jpeg")){
                    $type = ".jpg";
                }
                $img=$_FILES["input_img"];
                $origin=$img["tmp_name"];
                $destiny="public/".uniqid(). $type;
                copy($origin, $destiny);
                $this->itemModel->insertItem($_POST['name'],$_POST['description'],$_POST['weight'],$_POST['category'], $destiny);
                $this->view->showAdminPage();
            }else {
                $this->itemModel->insertItem($_POST['name'],$_POST['description'],$_POST['weight'],$_POST['category'], null);
                $this->view->showAdminPage();
            }
        }else{
            $this->helper->notFound("Empty input/s");
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