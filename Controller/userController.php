<?php

require_once "./View/userView.php";
require_once "./Model/usersModel.php";
require_once "./Model/categoryModel.php";

class userController{
    private $userModel;
    private $categoryModel;
    private $view;

    function __construct(){
        $this->view = new userView;
        $this->categoryModel = new categoryModel;
        $this->userModel = new userModel;

        if(isset($_SESSION['loged'])){
            if ($_SESSION['loged'] == true) {
                $this->verify = true;
            }else{
                $this->verify = false;
            }
        }
    }

    function addRegister(){
        if (!empty($_POST['user_email'] && !empty($_POST['user_password']))){
            $user_email = $_POST['user_email'];
            $user_password = password_hash($_POST['user_password'], PASSWORD_BCRYPT);
            $this->userModel->insertUser($user_email, $user_password);
            $this->view->login();
        }else{
            $this->view->notFound();
        }
    }

    function userLogin(){
        if (!empty($_POST['userEmail'] && !empty($_POST['userPassword']))){
            $user_email_login = $_POST['userEmail'];
            $user_password_login = $_POST['userPassword'];
            $user = $this->userModel->verifyUser($user_email_login);

            if($user && password_verify($user_password_login, $user->user_password)){
                $_SESSION["loged"] = true;
                $_SESSION["userEmail"] = $user_email_login;
                $this->showAdmin();
            }
        }else{
            $this->view->notFound();
        }
    }
    
    function register(){
        if (isset($_SESSION["loged"])){
            if ($_SESSION["loged"] == true){
                $categories = $this->categoryModel->getCategories();
                $this->view->adminPage($categories);
            }
        }else{
        $this->view->register();
        }
    }

    function logOut(){
        session_destroy();
        $this->view->login();
    }

    function login(){
        $this->view->login();
    }

    function showAdmin(){
        if (isset($_SESSION["loged"])){
            if ($_SESSION["loged"] == true){
                $categories = $this->categoryModel->getCategories();
                $this->view->adminPage($categories );
            }
        }else{
            $this->view->login();
        }
        
    }
    
    function showNotFound(){
        $this->view->notFound();
    }

}