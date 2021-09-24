<?php

require_once "Controller/controller.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);


$controller = new Controller();
// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        $controller->showHome(); 
    break;

    case 'allItems': 
        $controller->showAllItems(); 
    break;

    case 'allCategories': 
        $controller->showAllCategories(); 
    break;

    case 'Category': 
        $controller->showItems_Categories($params[1]); 
    break;
    

    case 'Item':
        $controller->showItem($params[1]);
    break;
    
    case 'login': 
        $controller->showLogin(); 
    break;

    case 'adminlogin': 
        $controller->showAdminLogin(); 
    break;
    
    case 'admin': 
        $controller->showAdmin(); 
    break;

    case 'search': 
        $controller->showAdminModel(); 
    break;

    default: 
        $controller->shownotFound(); 
    break;
};


