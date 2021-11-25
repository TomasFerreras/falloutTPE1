<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class view{
    private $smarty; 

    function __construct(){
        $this->smarty = new Smarty();
    }

    function Home($verify){
        $this->smarty->assign('verify', $verify );
        $this->smarty->display('templates/landingPageMain.tpl');
    }
    
    function AllItems($items, $verify ){
        $this->smarty->assign('verify', $verify);
        $this->smarty->assign('items', $items);
        $this->smarty->display('templates/allItems.tpl');
    }


    function ItemsDescription( $item, $verify, $userId){
        $this->smarty->assign('verify', $verify);
        $this->smarty->assign('item', $item);
        $this->smarty->assign('userId', $userId);
        $this->smarty->display('templates/itemDescription.tpl');
    }

    function showItemPerCategory($Items_Category, $Category, $verify){
        $this->smarty->assign('verify', $verify);
        $this->smarty->assign('items_Category', $Items_Category);
        $this->smarty->assign('category', $Category);

        $this->smarty->display('templates/itemsPerCategory.tpl');
    }

    function searchAdminPage($items, $categories, $search){
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('search', $search);
        $this->smarty->assign('items', $items);
        $this->smarty->display('templates/adminModel.tpl');
    }

    function showAdminPage(){
        header("location: ".BASE_URL."admin");
    }
    
}
