<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class view{
    private $smarty; 

    function __construct(){
        $this->smarty = new Smarty();
    }

    function Home(){
        $this->smarty->display('templates/landingPageMain.tpl');
    }
    
    function AllItems($items){
        $this->smarty->assign('items', $items);
        $this->smarty->display('templates/allItems.tpl');
    }


    function ItemsDescription($items , $item){
        $this->smarty->assign('items', $items);
        $this->smarty->assign('item', $item);
        $this->smarty->display('templates/itemDescription.tpl');
    }

    

    function searchAdminPage($items, $search){
        $this->smarty->assign('search', $search);
        $this->smarty->assign('items', $items);
        $this->smarty->display('templates/adminModel.tpl');
    }

    function showAdminPage(){
        header("location: ".BASE_URL."admin");
    }
    
}
