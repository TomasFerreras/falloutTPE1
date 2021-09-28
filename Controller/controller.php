<?php

require_once "./Model/categoryModel.php";
require_once "./Model/itemModel.php";
require_once "./Model/usersModel.php";
require_once "./View/view.php";
class Controller{

    private $itemModel;
    private $categoryModel;
    private $userModel;
    private $view;

    function __construct(){
        $this->itemModel = new itemModel;
        $this->categoryModel = new categoryModel;
        $this->view = new view;
        $this->userModel = new userModel;
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
        session_start();
        if (isset($_SESSION["loged"])){
            if ($_SESSION["loged"] == true){
                $this->view->adminPage();
            }
        }else{
        $this->view->Login();
        }
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
    }

    function addRegister(){
        if (!empty($_POST['user_email'] && !empty($_POST['user_password']))){
            $user_email = $_POST['user_email'];
            $user_password = password_hash($_POST['user_password'], PASSWORD_BCRYPT);
            $this->userModel->insertUser($user_email, $user_password);
            $this->view->AdminLogin();
        }else{
            $this->view->notFound();
        }
    }


    function userLogin(){
        session_start();
        if (!empty($_POST['userEmail'] && !empty($_POST['userPassword']))){
            $user_email_login = $_POST['userEmail'];
            $user_password_login = $_POST['userPassword'];
            $hashedPassword = $this->userModel->verifyUser($user_email_login);

            if($hashedPassword[0] && password_verify($user_password_login, $hashedPassword[1])){
                $_SESSION["loged"] = true;
                $_SESSION["userEmail"] = $user_email_login;
                $this->view->adminPage();
            }
        }else{
            $this->view->notFound();
        }
    }
}