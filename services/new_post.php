<?php
session_start();
include("../model/fonctions.php");


if(isset($_POST['categorie']) && isset($_POST['sujet']) && isset($_POST['post']))
{
    /**
     * Alfonso: En règle général il faut faire attention des inputs des utilisateurs
     * parfois il peuvent être malveillants et insérer des tags script pour executer du code
     * utilise peut-être stip_tags par exemple:  strip_tags($_POST['categorie']);
     */
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