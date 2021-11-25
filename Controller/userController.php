<?php


require_once "./View/userView.php";
require_once "./Controller/itemController.php";
require_once "./Model/usersModel.php";
require_once "./Model/categoryModel.php";
require_once "./Model/itemModel.php";
require_once "./Helpers/AutHelper.php";

class userController{
    private $userModel;
    private $categoryModel;
    private $view;
    private $itemController;
    private $helper;
    

    function __construct(){
        $this->view = new userView;
        $this->categoryModel = new categoryModel;
        $this->userModel = new userModel;
        $this->helper = new AuthHelper;
        $this->itemController = new itemController;
        
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
            $this->userLogin();
        }else{
            $this->notFound("Empty email or passwword");
        }
    }

    function login(){
        $this->view->login();
    }

    function userLogin(){
        if (!empty($_POST['user_email']) && !empty($_POST['user_password'])){
            $user_email_login = $_POST['user_email'];
            $user_password_login = $_POST['user_password'];
            $user = $this->userModel->verifyUser($user_email_login);

            if($user && password_verify($user_password_login, $user->user_password)){
                session_start();
                $_SESSION["loged"] = true;
                $_SESSION["role"] = $user->role;
                $_SESSION["userEmail"] = $user_email_login;
                $_SESSION["userId"] = $user->id_user;
                $this->itemController->showHome();
            }else{
                $this->helper->notFound("User doesnt exist or wrong password");
            }
        }else{
            $this->helper->notFound("Empty email or passwword");
        }
    }

    function logOut(){
        session_start();
        session_destroy();
        $this->login();
    }


    function showAdmin(){
        $this->helper->checkRole(); 
        $categories = $this->categoryModel->getCategories();
        $this->view->adminPage($categories);
    }
        
    function usersPage(){
        $this->helper->checkRole(); 
        $users = $this->userModel->getUsers();
        $this->view->showUsers($users);
    }

    function userEdit(){
        $userId = $_POST["userId"];
        $userRole = $_POST["role"];
        $this->userModel->editUser($userId, $userRole);
        $users = $this->userModel->getUsers();
        $this->view->showUsers($users);
    }
    
    function deleteUser($id_usuario){
        $this->userModel->deleteUser($id_usuario);
        $users = $this->userModel->getUsers();
        $this->view->showUsers($users);
    }

}