<?php

class AuthHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["userEmail"])){
            header("Location: ".BASE_URL."login");
        }
    }

    function checkLoggedOn(){
        session_start();
        if(isset($_SESSION["userEmail"])){
            header("Location: ".BASE_URL."home");
        }
    }
    
    function checkRole(){
        if($_SESSION["role"] == 0 ){
            header("location: ".BASE_URL."home");
        }
    }
}