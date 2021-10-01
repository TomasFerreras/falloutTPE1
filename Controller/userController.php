<?php

require_once "./View/userView.php";
require_once "./Model/usersModel.php";

class userController{
    private $userModel;
    private $view;

    function __construct(){
        $this->view = new userView;
        $this->userModel = new userModel;
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

            if($hashedPassword && password_verify($user_password_login, $hashedPassword->user_password)){
                $_SESSION["loged"] = true;
                $_SESSION["userEmail"] = $user_email_login;
                $this->showAdmin();
            }
        }else{
            $this->view->notFound();
        }
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

    function showAdmin(){
        $this->view->adminPage();
    }
    
    function showNotFound(){
        $this->view->notFound();
    }

}