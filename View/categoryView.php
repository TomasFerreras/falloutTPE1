<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class categoryView{
    function __construct(){
        $this->smarty = new Smarty();
    }

    function AllCategories($categories, $verify){
        $this->smarty->assign('verify', $verify);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/allCategories.tpl');
    }

    
}