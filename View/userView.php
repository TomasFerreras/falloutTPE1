<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class userView{
    function __construct(){
        $this->smarty = new Smarty();
    }

    function register(){
        $this->smarty->display('templates/register.tpl');
    }

    function login(){
        $this->smarty->display('templates/login.tpl');
    }

    function adminPage($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/adminPage.tpl');
    }
    
    function showUsers($users){
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/usersPage.tpl');
    }

    function notFound(){
        $this->smarty->display('templates/notFound404.tpl');
    }

    
}