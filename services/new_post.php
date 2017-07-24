<?php
session_start();
include("../model/fonctions.php");


if(isset($_POST['categorie']) && isset($_POST['sujet']) && isset($_POST['post']))
{
    $categorie=$_POST['categorie'];
    $sujet=$_POST['sujet'];
    $post=$_POST['post'];
    $userid=$_SESSION['user'][0]['id'];

    // var_dump($_SESSION['user'][0]['id']);
    // var_dump(setNewPost($categorie,$sujet,$post));
    
    //die();
    setNewPost($categorie,$sujet,$post,$userid);   

    $res = setNewPost($categorie,$sujet,$post,$userid);
    if($res==true){
        
        $message = "Votre post à bien été remis";
        
        header('location:../index.php?page=post&mess=1');
    }
                
}      
else
{
      header('location:../index.php?page=post&error=1');
  
}










?>