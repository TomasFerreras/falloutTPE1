<?php
require_once "./Model/model.php";
require_once "./View/view.php";
    class Controller{

        private $model;
        private $view;

        function __construct(){
            $this->model = new model;
            $this->view = new view;
        }

        function showHome(){
            $this->view->Home();
        }
        
        function showAllItems(){
            $items = $this->model->getItems();
            $this->view->AllItems($items);
        }

        function showAllCategories(){
            $categories = $this->model->getCategories();
            $this->view->AllCategories($categories);
        }

        function showItems_Categories($id_category){
            $Items_Category = $this->model->getItems();
            $this->view->showConsumables($Items_Category, $id_category);
        }

        function showItem($item){
            $items = $this->model->getItems();
            $this->view->ItemsDescription($items , $item);
        }

        function showLogin(){
            $this->view->Login();
        }

        function showAdminLogin(){
            $this->view->AdminLogin();
        }

        function showNotFound(){
            $this->view->notFound();
        }

        function showAdmin(){
            $items = $this->model->getItems();
            $this->view->adminPage($items);
        } 

        function showAdminModel(){
            $items = $this->model->getItems();
            $this->view->adminModel($items , $_POST['adminSearch']);
        }
    }