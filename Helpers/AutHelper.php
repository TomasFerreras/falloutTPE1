<?php

require_once "View\userView.php";
class AuthHelper{
    private $userView;

    function __construct(){
        $this->userView = new userView;
    }

    function checkLoggedIn(){
        if(!isset($_SESSION)){ 
            session_start(); 
            if(!isset($_SESSION["userEmail"])){
                header("Location: ".BASE_URL."login");
            }
        }else{
            if(!isset($_SESSION["userEmail"])){
                header("Location: ".BASE_URL."login");
            }
        }
    }

    function checkLoggedOn(){
        if(!isset($_SESSION)){ 
            session_start(); 
            if(isset($_SESSION["userEmail"])){
                header("Location: ".BASE_URL."home");
            }
        }else{
            if(isset($_SESSION["userEmail"])){
                header("Location: ".BASE_URL."home");
            }
        }
    }
    
    function checkRole(){
        if(!isset($_SESSION)){ 
            session_start(); 
            if($_SESSION["role"] == 0 ){
                header("location: ".BASE_URL."home");
            }
        }else{
            if($_SESSION["role"] == 0 ){
                header("location: ".BASE_URL."home");
            }
        }
        
    }

    function notFound($error){
        $this->userView->notFound($error);
    }
}