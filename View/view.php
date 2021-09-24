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
    
    function AllCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/allCategories.tpl');
    }
    
    function AllItems($items){
        $this->smarty->assign('items', $items);
        $this->smarty->display('templates/allItems.tpl');
    }

    function showConsumables($Items_Category, $Category){
        $this->smarty->assign('items_Category', $Items_Category);
        $this->smarty->assign('category', $Category);

        $this->smarty->display('templates/itemsPerCategory.tpl');
    }

    function ItemsDescription($items , $item){
        $this->smarty->assign('items', $items);
        $this->smarty->assign('item', $item);
        $this->smarty->display('templates/itemDescription.tpl');
    }

    function Login(){
        $this->smarty->display('templates/login.tpl');
    }

    function AdminLogin(){
        $this->smarty->display('templates/loginAdmin.tpl');
    }

    function notFound(){
        $this->smarty->display('templates/notFound404.tpl');
    }

    function adminPage($items ){
        $this->smarty->assign('items', $items);
        $this->smarty->display('templates/adminPage.tpl');
    }

    function adminModel(){
        // $this->smarty->assign('items', $items);
        // $this->smarty->assign('search', $search);
        $this->smarty->display('templates/admin.tpl');
    }
    
    
    function ItemsEdit($items){
        $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>AdminOptions</title>
        </head>
            <body>
                <table style="border:1px solid black">
                    <thead>
                        <tr>
                            <td>id_item</td>
                            <td>name_item</td>
                            <td>description_item</td>
                            <td>weight_item</td>
                            <td>id_category</td>
                        </tr>
                    </thead>
                    <tbody>';
                    foreach($items as $item){
                        if($item->id_item == $_POST['adminEdit']){
                            $html.= '<tr>
                                        <td>'. $item->id_item . '</td>
                                        <td> <input type="text" placeholder="'.$item->name_item.'"> </td>
                                        <td>'. $item->description_item .'</td>
                                        <td>'. $item->weight_item . '</td>
                                        <td>'. $item->category . '</td>
                                    </tr>';
                        }
                    }
                    $html.='
                    </tbody>
                </table>

            </body>
        </html>';
    echo $html;
    }
}
