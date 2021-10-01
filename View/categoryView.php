<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class categoryView{
    function __construct(){
        $this->smarty = new Smarty();
    }

    function AllCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/allCategories.tpl');
    }

    function showConsumables($Items_Category, $Category){
        $this->smarty->assign('items_Category', $Items_Category);
        $this->smarty->assign('category', $Category);

        $this->smarty->display('templates/itemsPerCategory.tpl');
    }
}