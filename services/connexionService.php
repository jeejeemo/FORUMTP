<?php
session_start();
include("../model/fonctions.php");

if(isset($_POST['pseudo']) && isset($_POST['password'])){
    
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    
    
    $login=verifLogin($password,$pseudo);

    if(empty($login)){
           header("location: ../index.php?page=inscription");
}            
        
        
        else{
            $_SESSION["user"]=$login;
            header("location: ../index.php?page=debut");
           
        }

}