<?php
require_once 'libs/Router.php';
require_once 'ApiController/ApiController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
// $router->addRoute('tareas', 'GET', 'ApiTaskController', 'obtenerTareas');
// $router->addRoute('tareas', 'POST', 'ApiTaskController', 'crearTarea');
$router->addRoute('Item/:ID', 'GET', 'ApiController', 'commentsSection');
$router->addRoute('Item', 'POST', 'ApiController', 'addComment');
$router->addRoute('Item/:ID', 'DELETE', 'ApiController', 'deleteComment');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);