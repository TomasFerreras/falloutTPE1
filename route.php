<?php

require_once "Controller/itemController.php";
require_once "Controller/categoryController.php";
require_once "Controller/userController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);


$itemController = new itemController();
$categoryController = new categoryController();
$userController = new userController();
// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        $itemController->showHome(); 
    break;

    case 'allItems': 
        $itemController->showAllItems(); 
    break;

    case 'allCategories': 
        $categoryController->showAllCategories(); 
    break;

    case 'Category': 
        $itemController->showItems_Categories($params[1]); 
    break;
    
    case 'Item':
        $itemController->showItem($params[1]);
    break;
    
    case 'register': 
        $userController->register(); 
    break;

    case 'login': 
        $userController->login(); 
    break;
    
    case 'admin': 
        $userController->showAdmin(); 
    break;

    case 'adminSearch': 
        $itemController->search(); 
    break;

    case 'createItem': 
        $itemController->createItem(); 
    break; 

    case 'deleteItem': 
        $itemController->deleteItem($params[1]); 
    break;

    case 'editItem': 
        $itemController->editItem($params[1]); 
    break;

    case 'userRegister':
        $userController->addRegister();
    break;

    case 'userLogin':
        $userController->userLogin();
    break;

    case 'logOut':
        $userController->logOut();
    break;

    case 'users': 
        $userController->usersPage(); 
    break;
    
    case 'userEdit':
        $userController->userEdit();
    break;

    default: 
        $userController->shownotFound(); 
    break;
};

