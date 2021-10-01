<?php

// class userModel{
//     private $userDB;

//     function __construct(){
//         $this->userDB = new PDO('mysql:host=localhost;'.'dbname=db_users;charset=utf8', 'root', '');
//     }

//     function getUsers(){
//         $sentencia = $this->userDB->prepare( "select * from db_user");
//         $sentencia->execute();
//         $users = $sentencia->fetchAll(PDO::FETCH_OBJ);
//         return $users;
//     }

//     function insertUser($user_email, $user_password){
//         $sentencia = $this->userDB->prepare("INSERT INTO db_user (user_email,user_password) VALUES(?, ?)");
//         $sentencia->execute(array($user_email, $user_password));
//     }

//     function verifyUser($user_email_login){
//         $query = $this->userDB->prepare("SELECT * FROM db_user WHERE user_email=?");
//         $query->execute([$user_email_login]);

//         $user = $query->fetch(PDO::FETCH_OBJ);
//         return array($user, $user->user_password);
//     }
// }