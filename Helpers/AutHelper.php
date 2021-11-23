<?php

class AuthHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }else{
            if(!isset($_SESSION["userEmail"])){
                header("Location: ".BASE_URL."login");
            }
        }
    }

    function checkLoggedOn(){
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }else{
            if(isset($_SESSION["userEmail"])){
                header("Location: ".BASE_URL."home");
            }
        }
    }
    
    function checkRole(){
        if($_SESSION["role"] == 0 ){
            header("location: ".BASE_URL."home");
        }
    }
}