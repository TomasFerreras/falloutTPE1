<?php

require_once "./View/userView.php";
require_once "./Controller/itemController.php";
require_once "./Model/usersModel.php";
require_once "./Model/categoryModel.php";
require_once "./Helpers/AutHelper.php";

class userController{
    private $userModel;
    private $categoryModel;
    private $view;
    private $itemview;
    private $helper;

    function __construct(){
        $this->view = new userView;
        $this->categoryModel = new categoryModel;
        $this->userModel = new userModel;
        $this->helper = new AuthHelper;
        $this->itemview = new itemController;
    }
    
    function register(){
        $this->helper->checkLoggedOn();
        $this->view->register();
    }

    function addRegister(){
        if (!empty($_POST['user_email'] && !empty($_POST['user_password']))){
            $user_email = $_POST['user_email'];
            $user_password = password_hash($_POST['user_password'], PASSWORD_BCRYPT);
            $this->userModel->insertUser($user_email, $user_password, 0);
            $this->view->login();
        }else{
            $this->view->notFound();
        }
    }

    function login(){
        $this->view->login();
    }

    function userLogin(){
        if (!empty($_POST['userEmail'] && !empty($_POST['userPassword']))){
            $user_email_login = $_POST['userEmail'];
            $user_password_login = $_POST['userPassword'];
            $user = $this->userModel->verifyUser($user_email_login);

            if($user && password_verify($user_password_login, $user->user_password)){
                $_SESSION["loged"] = true;
                $_SESSION["role"] = $user->role;
                $_SESSION["userEmail"] = $user_email_login;
                $this->itemview->showHome();
            }else{
                $this->view->notFound();
            }
        }else{
            $this->view->notFound();
        }
    }

    function logOut(){
        session_destroy();
        $this->view->login();
    }


    function showAdmin(){
        $this->helper->checkLoggedIn();
        $this->helper->checkRole(); 
        $categories = $this->categoryModel->getCategories();
        $this->view->adminPage($categories);
    }
        
    
    function showNotFound(){
        $this->view->notFound();
    }

}