<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class userView{
    function __construct(){
        $this->smarty = new Smarty();
    }

    function Login(){
        $this->smarty->display('templates/register.tpl');
    }

    function AdminLogin(){
        $this->smarty->display('templates/login.tpl');
    }

    function adminPage(){
        $this->smarty->display('templates/adminPage.tpl');
    }
    
    function notFound(){
        $this->smarty->display('templates/notFound404.tpl');
    }
}